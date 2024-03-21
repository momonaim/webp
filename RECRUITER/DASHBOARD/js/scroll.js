const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if(entry.isIntersecting) {
			entry.target.classList.add('show');
		} else {
			entry.target.classList.remove('show');
		}

	});
});

const scrollElements = document.querySelectorAll('.scroll1');
const scrollElements2 = document.querySelectorAll('.scroll2');
const scrollElements3 = document.querySelectorAll('.scroll3');
const scrollElements4 = document.querySelectorAll('.scroll4');
const scrollElements5 = document.querySelectorAll('.scroll5');
const scrollElements6 = document.querySelectorAll('.scroll6');
const scrollElements7 = document.querySelectorAll('.scroll7');
const scrollElements8 = document.querySelectorAll('.scroll8');


scrollElements.forEach((el) => observer.observe(el));
scrollElements2.forEach((el) => observer.observe(el));
scrollElements3.forEach((el) => observer.observe(el));
scrollElements4.forEach((el) => observer.observe(el));
scrollElements5.forEach((el) => observer.observe(el));
scrollElements6.forEach((el) => observer.observe(el));
scrollElements7.forEach((el) => observer.observe(el));
scrollElements8.forEach((el) => observer.observe(el));


