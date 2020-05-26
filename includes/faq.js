let d2 = document.getElementById("FAQ2");
let d3 = document.getElementById("FAQ3");
let d4 = document.getElementById("FAQ4");
let d5 = document.getElementById("FAQ5");
let d6 = document.getElementById("FAQ6");


let p2 = document.getElementById("answer2");
let p3 = document.getElementById("answer3");
let p4 = document.getElementById("answer4");
let p5 = document.getElementById("answer5");
let p6 = document.getElementById("answer6");



d2.addEventListener("click", function(){
	setTimeout(function() {
		p3.style.display = "none";
		p4.style.display = "none";
		p5.style.display = "none";
		p6.style.display = "none";
		p2.style.display = "block";}, 300);
});


d3.addEventListener("click", function(){
	setTimeout(function() {
		p2.style.display = "none";
		p4.style.display = "none";
		p5.style.display = "none";
		p6.style.display = "none";
		p3.style.display = "block";}, 300);
});

d4.addEventListener("click", function(){
	setTimeout(function() {
		p2.style.display = "none";
		p3.style.display = "none";
		p6.style.display = "none";
		p5.style.display = "none";
		p4.style.display = "block";}, 300);
});

d5.addEventListener("click", function(){
	setTimeout(function() {
		p2.style.display = "none";
		p4.style.display = "none";
		p3.style.display = "none";
		p6.style.display = "none";
		p5.style.display = "block";}, 300);
});


d6.addEventListener("click", function(){
	setTimeout(function() {
		p2.style.display = "none";
		p3.style.display = "none";
		p4.style.display = "none";
		p5.style.display = "none";
		p6.style.display = "block";}, 300);
});













/*
d3.addEventListener("mouseover", function(){
	setTimeout(function() {
		p3.style.display = "block";}, 300);
});

d3.addEventListener("mouseout", function(){
	setTimeout(function() {
		p3.style.display = "none";}, 300);
});

d4.addEventListener("mouseover", function(){
	setTimeout(function() {
		p4.style.display = "block";}, 300);
});

d4.addEventListener("mouseout", function(){
	setTimeout(function() {
		p4.style.display = "none";}, 300);
});

d5.addEventListener("mouseover", function(){
	setTimeout(function() {
		p5.style.display = "block";}, 300);
});

d5.addEventListener("mouseout", function(){
	setTimeout(function() {
		p5.style.display = "none";}, 300);
});

d6.addEventListener("mouseover", function(){
	setTimeout(function() {
		p6.style.display = "block";}, 300);
});

d6.addEventListener("mouseout", function(){
	setTimeout(function() {
		p6.style.display = "none";}, 300);
});
/*d2.addEventListener("mouseover", () => {p2.style.display = "block";});
d2.addEventListener("mouseout", () => {p2.style.display = "none";});

d3.addEventListener("mouseover", () => {p3.style.display = "block";});
d3.addEventListener("mouseout", () => {p3.style.display = "none";});

d4.addEventListener("mouseover", () => {p4.style.display = "block";});
d4.addEventListener("mouseout", () => {p4.style.display = "none";});

d5.addEventListener("mouseover", () => {p5.style.display = "block";});
d5.addEventListener("mouseout", () => {p5.style.display = "none";});

d6.addEventListener("mouseover", () => {p6.style.display = "block";});
d6.addEventListener("mouseout", () => {p6.style.display = "none";});
*/