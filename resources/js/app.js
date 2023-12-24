import './bootstrap';

// CANVAS PARTICLE EFFECTS
const canvas = document.getElementById("home-canvas");

if(canvas){
	const ctx = canvas.getContext("2d");
	canvas.width = window.innerWidth;
	canvas.height = window.innerHeight;

	let particlesArray;

	let mouse = {
		x: null,
		y: null,
		radius: (canvas.height / 110) * (canvas.width / 110)
	}

	window.addEventListener("mousemove", 
		function(event) {
			mouse.x = event.x;
			mouse.y = event.y;
		}
	);

	class Particle {
		constructor(x, y, directionX, directionY, size, colour) {
			this.x = x;
			this.y = y;
			this.directionX = directionX;
			this.directionY = directionY;
			this.size = size;
			this.colour = colour;
		}

		draw(){
			ctx.beginPath();
			ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
			ctx.fillStyle = '#c7c7c7';
			ctx.fill();
		}

		update() {
			if (this.x > canvas.width || this.x < 0){
				this.directionX = -this.directionX;
			}

			if (this.y > canvas.height || this.y < 0){
				this.directionY = -this.directionY;
			}

			let dx = mouse.x - this.x;
			let dy = mouse.y - this.y;
			let distance = Math.sqrt(dx*dx + dy*dy);

			if(distance < mouse.radius + this.size){
				if(mouse.x < this.x && this.x < canvas.width - this.size * 10){
					this.x += 10;
					this.directionX = -this.directionX;
				}

				if(mouse.x > this.x && this.x > this.size * 10){
					this.x -=10;
					this.directionX = -this.directionX;
				}

				if(mouse.y < this.y && this.y < canvas.height - this.size * 10){
					this.y += 10;
					this.directionY = -this.directionY;
				}

				if(mouse.y > this.y && this.y > this.size * 10){
					this.y -=10;
					this.directionY = -this.directionY;
				}
			}

			this.x += this.directionX;
			this.y += this.directionY;

			this.draw();
		}
	}

	function init(){
		particlesArray = [];

		let numberOfParticles = (canvas.height * canvas.width) / 15000;

		if(numberOfParticles > 250){
			numberOfParticles = 250;
		}

		for (let i=0; i < numberOfParticles; i++){
			let size = (Math.random() * 3) + 1;
			let x = (Math.random() * ((innerWidth - size * 2) - (size * 2)) + size * 2);
			let y = (Math.random() * ((innerHeight - size * 2) - (size * 2)) + size * 2);
			let directionX = (Math.random() * 5 ) - 2.5;
			let directionY = (Math.random() * 5) - 2.5;
			let colour = '#9c9a9a';

			particlesArray.push(new Particle(x, y, directionX, directionY, size, colour));
	 	}
	}

	function connect(){
		let opactityValue = 1;

		for(let a = 0; a < particlesArray.length; a++){
			for(let b = a; b < particlesArray.length; b++){
				let distance = ((particlesArray[a].x - particlesArray[b].x) * (particlesArray[a].x - particlesArray[b].x)) + ((particlesArray[a].y - particlesArray[b].y) * (particlesArray[a].y - particlesArray[b].y));

				if (distance < (canvas.width/7) * (canvas.height/7)){
					opactityValue = 1 - (distance / 20000);
					ctx.strokeStyle = 'rgba(187, 187, 187, ' + opactityValue + ')';
					ctx.lineWidth = 1;
					ctx.beginPath();
					ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
					ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
					ctx.stroke();
				}
			}
		}
	}

	function animate() {
		requestAnimationFrame(animate);
		ctx.clearRect(0, 0, innerWidth, innerHeight);

		for(let i = 0; i < particlesArray.length; i++){
			particlesArray[i].update();
		}
		connect();
	}

	window.addEventListener('resize',
		function(){
			canvas.width = innerWidth;
			canvas.height = innerHeight;
			mouse.radius = ((canvas.height / 110) * (canvas.width / 110));
			init();
		}
	)

	window.addEventListener('mouseout',
		function(){
			mouse.x = undefined;
			mouse.y = undefined;
		}
	)

	init();
	animate();
}

//JOB CARD
var jobCard = document.getElementsByClassName("job-card");

//JOB CARD EXPANDED
const jobTitleCard = document.getElementById("job-title");
const jobCompanyNameCard = document.getElementById("company-name");
const jobTypeCard = document.getElementById("job-type");
const jobNumApplicants = document.getElementById("num-applicants");
const jobDeadline = document.getElementById("deadline");
const jobLocationCard = document.getElementById("location-expand");
const jobSalaryCard = document.getElementById("salary-expand");
const jobDescriptionCard = document.getElementById("description");

//ON CLICK UPDATE JOB CARD DETAILS
for (let i = 0 ; i < jobCard.length; i++){
	jobCard[i].addEventListener("click", function(){
		displayJobDetails(jobCard[i])
	});
}

// JOB CHECK IF SELECTED 
function isSelected(job){
	if(job){
		if (job.classList.contains("selected")){
			console.log("Job data already collected, don't send request to database.");
			return true;
		} 
		else {
			console.log("Collecting data from database.");
			return false;
		}
	}
	return true;
}

//JOB CARD CLICK FUNCTION
function displayJobDetails(job){
	if(window.innerWidth >= 768){
		if (!isSelected(job)){
			for (let i = 0 ; i < jobCard.length; i++){
				if (jobCard[i].classList.contains("selected")){
					jobCard[i].classList.remove("selected");
				} 
			}
			job.classList.add("selected");

			let id = job.id;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {

			    	let response = JSON.parse(this.responseText);

			    	jobTitleCard.innerText = response.job_title;
					jobCompanyNameCard.innerText = response.company_name;
					jobTypeCard.innerText = response.job_type;
					jobNumApplicants.innerText = response.num_applications == "1" ? response.num_applications + " applicant" : response.num_applications + " applicants";
					jobDeadline.innerText = response.deadline;
					jobLocationCard.innerText = response.location;
					jobSalaryCard.innerText = response.salary;
					jobDescriptionCard.innerText = response.description;

			        console.log("success");
			    }
			};
			xhttp.open("GET", "http://localhost/jobsearch/public/api/jobs/" + id, true);
			xhttp.send();
		}
	}
}

// INITIALISE JOB DETAILS 
displayJobDetails(jobCard[0]);