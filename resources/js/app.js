import './bootstrap';

// CANVAS ART
const homeCanvas = document.getElementById('home-canvas');
if (homeCanvas){
	console.log(homeCanvas);
}

//JOB CARD
var jobCard = document.getElementsByClassName("job-card");

//JOB CARD EXPANDED
const jobTitleCard = document.getElementById("job-title");
const jobCompanyNameCard = document.getElementById("company-name");
const jobLocationCard = document.getElementById("location-expand");
const jobSalaryCard = document.getElementById("salary");

//ON CLICK UPDATE JOB CARD DETAILS
for (let i = 0 ; i < jobCard.length; i++){
	jobCard[i].addEventListener("click", function(){
		displayJobDetails(jobCard[i])
	});
}

//JOB CARD CLICK FUNCTION
function displayJobDetails(job){
	jobTitleCard.innerText = job.querySelectorAll("div div p a")[0].innerText;
	jobCompanyNameCard.innerText = job.querySelectorAll("div div p a")[1].innerText;
	jobLocationCard.innerText = job.querySelectorAll("div div p a")[2].innerText;
}