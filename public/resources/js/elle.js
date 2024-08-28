var i1 = 0;
var images1 = ['Ellep.jpg','elle1.jpg', 'elle2.jpg', 'elle3.jpg' ,'elle4.jpg'];
var time1 = 3000;

function changeimg1() {
    document.case1.src = images1[i1];
    if (i1 < images1.length - 1) {
        i1++;
    } else {
        i1 = 0;
    }
    setTimeout(changeimg1, time1);
}
window.onload = function() {
    changeimg1();
};


