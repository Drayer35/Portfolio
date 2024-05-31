import './bootstrap';
 
if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  document.querySelector('html').classList.add('dark')
} else if (localStorage.theme === 'dark') {
  document.querySelector('html').classList.add('dark')
}
document.querySelectorAll(".setMode").forEach(item => 
  item.addEventListener("click", () => {
      let htmlClasses = document.querySelector('html').classList;
      if(localStorage.theme == 'dark') {
          htmlClasses.remove('dark');
          localStorage.theme = ''
      } else {
          htmlClasses.add('dark');
          localStorage.theme = 'dark';
      }
  })
)
particlesJS({
    "particles": {
      "number": {
        "value": 20,
        "density": {
          "enable": true,
          "value_area":1200
        }
      },
      "color": {
        "value": "#4682B4"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        }
      },
      "opacity": {
        "value": 0.9,
        "random":false,
        "anim": {
          "enable": true,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable":true,
          "speed":1,
          "size_min": 0.8,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 250,
        "color": "#4682B4",
        "opacity": 1,
        "width": 0
      },
      "move": {
        "enable": true,
        "speed": 2,
        "direction": "none",
        "random": true,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
          "enable": false,
          "rotateX": 0,
          "rotateY": 0
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": {
          "enable": false,
          "mode": "repulse"
        },
        "onclick": {
          "enable": false,
          "mode": "push"
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": 1
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200,
          "duration": 0.4
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true
  })