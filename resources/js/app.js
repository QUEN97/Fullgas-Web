import './bootstrap';
import Alpine from 'alpinejs'

window.Alpine = Alpine

//desactiv el click derecho
document.addEventListener("contextmenu", function (event) {
    event.preventDefault();
});

//funcion para ocultar/mostrar la barra de navegacion al hacer scroll
Alpine.data('headerScroll', () => ({
    mobileMenuOpen: false,
    lastScroll: 0,
    hidden: false,
    scrollingDown: false,
    checkScroll() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        if (currentScroll <= 0) {
            this.hidden = false;
            this.scrollingDown = false;
            return;
        }
        this.scrollingDown = currentScroll > this.lastScroll;
        if (this.scrollingDown && !this.hidden && currentScroll > 100) {
            this.hidden = true;
        } else if (!this.scrollingDown && this.hidden) {
            this.hidden = false;
        }
        this.lastScroll = currentScroll;
    }
}));

Alpine.data('counterAnimation', () => ({
    stations: 0,
    employees: 0,
    countries: 0,
    years: 0,
    duration: 2000,
    observer: null,

    init() {
        this.observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.animateCounters();
                    this.observer.disconnect();
                }
            });
        }, { threshold: 0.5 });

        this.observer.observe(this.$el);
    },

    animateCounters() {
        const startTime = Date.now();
        const endTime = startTime + this.duration;
        const values = {
            stations: { target: 180, increment: 180 / this.duration },
            employees: { target: 2800, increment: 2800 / this.duration },
            countries: { target: 4, increment: 4 / this.duration },
            years: { target: 50, increment: 50 / this.duration }
        };

        const animate = () => {
            const now = Date.now();
            const progress = Math.min(1, (now - startTime) / this.duration);

            for (const key in values) {
                const target = values[key].target;
                this[key] = Math.floor(progress * target);
            }

            if (progress < 1) {
                requestAnimationFrame(animate);
            } else {

                this.stations = 180;
                this.employees = 2800;
                this.countries = 4;
                this.years = 50;
            }
        };

        requestAnimationFrame(animate);
    }

}));

document.addEventListener('alpine:init', () => {
    Alpine.data('galeriaBuenTrato', () => ({
        modalAbierto: false,
        actual: 0,
        imagenes: [
            {
                src: 'images/galeria_buen_trato/personal_1.jpeg',
                alt: 'Colaboradora destacada FullGas, brindando atención cercana y cordial en su estación',
            },
            {
                src: 'images/galeria_buen_trato/matriz valladolid.jpeg',
                alt: 'Sucursal Matriz Valladolid',
            },
            {
                src: 'images/galeria_buen_trato/buen_trato.jpg',
                alt: 'El Buen Trato',
            },
            {
                src: 'images/galeria_buen_trato/personal_2.jpg',
                alt: 'Colaborador de FullGas en atención al cliente, sonriente y uniformado',
            },
            {
                src: 'images/galeria_buen_trato/personal_3.jpg',
                alt: 'Colaborador del equipo en estación de servicio, enfocado en su labor',
            },
            {
                src: 'images/galeria_buen_trato/personal_4.jpg',
                alt: 'Colaborador brindando servicio con actitud profesional y amabilidad',
            },
            {
                src: 'images/galeria_buen_trato/personal_5.jpg',
                alt: 'Colaborador participando en una sesión de capacitación',
            },
            {
                src: 'images/galeria_buen_trato/personal_6.jpg',
                alt: 'Equipo de FullGas celebrando logros en conjunto',
            }
        ],

        abrirModal(index) {
            this.actual = index;
            this.modalAbierto = true;
            document.body.classList.add('overflow-hidden');
        },

        cerrarModal() {
            this.modalAbierto = false;
            document.body.classList.remove('overflow-hidden');
        },

        siguiente() {
            this.actual = (this.actual + 1) % this.imagenes.length;
        },

        anterior() {
            this.actual = (this.actual - 1 + this.imagenes.length) % this.imagenes.length;
        },

        // Manejar teclado
        init() {
            window.addEventListener('keydown', (e) => {
                if (!this.modalAbierto) return;

                if (e.key === 'ArrowRight') {
                    this.siguiente();
                } else if (e.key === 'ArrowLeft') {
                    this.anterior();
                } else if (e.key === 'Escape') {
                    this.cerrarModal();
                }
            });
        }
    }));

    Alpine.data('galeriaEscuderia', () => ({
        modalAbierto: false,
        actual: 0,
        imagenes: [
            {
                src: 'images/galeria_escuderia/Ham_Continental.jpg',
                alt: 'Dos nombres, una misma pasión por la velocidad y la historia: Ham Continental y Scuderia FullGas, juntos en una sola placa que honra el legado de José Ham Gunam. Un tributo al ingenio mexicano que sigue dejando huella.',
            },
            {
                src: 'images/galeria_escuderia/clasico.jpg',
                alt: 'Triumph TR250, un coche deportivo británico producido por Standard Triumph Motor Company entre 1961 y 1968.',
            },
            {
                src: 'images/galeria_escuderia/clasico2.jpg',
                alt: 'Volvo Amazon clásico, un modelo que se produjo entre 1956 y 1970.',
            },
            {
                src: 'images/galeria_escuderia/clasico3.jpg',
                alt: 'Mercedes-Benz 190 SL, un roadster de lujo de dos puertas producido por Mercedes-Benz entre 1955 y 1963.',
            },
            {
                src: 'images/galeria_escuderia/clasico4.jpg',
                alt: 'Fiat 124 Sport Spider, un deportivo descapotable producido por Fiat entre 1966 y 1982. Fue diseñado por Tom Tjaarda y fabricado en la fábrica de Pininfarina en Italia.',
            },
            {
                src: 'images/galeria_escuderia/clasico5.jpg',
                alt: 'Triumph TR250, un coche deportivo británico producido por Standard Triumph Motor Company entre 1961 y 1968. Este modelo es conocido por su diseño elegante y su rendimiento en carretera.',
            },
            {
                src: 'images/galeria_escuderia/clasico6.jpg',
                alt: 'Triumph TR4, un coche deportivo producido por la Triumph Motor Company en el Reino Unido.',
            },
            {
                src: 'images/galeria_escuderia/clasico7.jpg',
                alt: 'Volkswagen Karmann Ghia, un deportivo icónico producido entre 1955 y 1974 y Austin-Healey Sprite, un pequeño deportivo descapotable producido en el Reino Unido entre 1958 y 1971.',
            },
            {
                src: 'images/galeria_escuderia/clasico8.jpg',
                alt: 'Peugeot 403, un automóvil de tamaño mediano fabricado entre 1955 y 1966. Fue el primer Peugeot en superar el millón de unidades vendidas.',
            },
            {
                src: 'images/galeria_escuderia/clasico9.jpg',
                alt: 'MG T-Type, una serie de coches deportivos biplaza descapotables producidos por MG entre 1936 y 1955.',
            },
            {
                src: 'images/galeria_escuderia/clasico10.jpg',
                alt: 'El MG T-Type fue un coche pionero en su tiempo, y su diseño influyó en muchos otros coches deportivos que le siguieron.',
            },
            {
                src: 'images/galeria_escuderia/clasico11.jpg',
                alt: 'Alfa Romeo Spider, un roadster clásico producido por la marca italiana Alfa Romeo desde 1966 hasta 1993. Este modelo se mantuvo en producción durante casi tres décadas con modificaciones estéticas y mecánicas menores, siendo un diseño clásico muy valorado.',
            },
            {
                src: 'images/galeria_escuderia/clasico12.jpg',
                alt: 'Jaguar XK150, un automóvil deportivo producido por Jaguar entre 1957 y 1961. Este modelo fue el sucesor del XK140 y se ofrecía inicialmente en versiones cupé de techo fijo (FHC) y cupé de techo abatible (DHC).',
            },
            {
                src: 'images/galeria_escuderia/clasico13.jpg',
                alt: 'Porsche 356, el primer automóvil que llevó el nombre Porsche, fabricado en 1948. Este modelo fue el precursor de los legendarios iconos de competición y de carretera de Porsche.',
            },
            {
                src: 'images/galeria_escuderia/clasico14.jpg',
                alt: 'Packard One-Twenty o Packard 160, producido por la Packard Motor Car Company entre 1935 y 1942.',
            }
        ],

        abrirModal(index) {
            this.actual = index;
            this.modalAbierto = true;
            document.body.classList.add('overflow-hidden');
        },

        cerrarModal() {
            this.modalAbierto = false;
            document.body.classList.remove('overflow-hidden');
        },

        siguiente() {
            this.actual = (this.actual + 1) % this.imagenes.length;
        },

        anterior() {
            this.actual = (this.actual - 1 + this.imagenes.length) % this.imagenes.length;
        },

        // Manejar teclado
        init() {
            window.addEventListener('keydown', (e) => {
                if (!this.modalAbierto) return;

                if (e.key === 'ArrowRight') {
                    this.siguiente();
                } else if (e.key === 'ArrowLeft') {
                    this.anterior();
                } else if (e.key === 'Escape') {
                    this.cerrarModal();
                }
            });
        }
    }));
});

window.contactForm = function () {
    return {
        showForm: true,
        showSuccess: false,
        isLoading: false,
        async submitForm() {
            this.isLoading = true;
            try {
                const form = document.getElementById('contact-form');
                const formData = new FormData(form);

                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (data.success) {
                    this.showForm = false;
                    this.showSuccess = true;
                }
            } catch (error) {
                console.error('Error:', error);
            } finally {
                this.isLoading = false;
            }
        },
        resetForm() {
            this.showSuccess = false;
            this.showForm = true;
            document.getElementById('contact-form').reset();
        }
    }
}

Alpine.data('mapApp', () => ({
    userLocation: null,
    loadingLocation: false,
    locationError: null,

    init() {
        // Estado compartido inicial
        Alpine.store('estaciones', {
            selected: null, // estacion seleccionada
            all: [],        // Todas las estaciones
            nearest: null   // Estacion más cercana
        });

        // Cargar las estaciones desde la API
        fetch('/api/estaciones', {
            // headers: {
            //     'X-API-TOKEN': import.meta.env.VITE_API_TOKEN,
            //     'Accept': 'application/json'
            // }
        })
            .then(response => response.json())
            .then(data => {
                // Almacenar todas las estaciones
                Alpine.store('estaciones').all = data;

                // Establecer primera sucursal como default
                if (data.length > 0) {
                    Alpine.store('estaciones').selected = data[0];
                }

                // Intentar obtener ubicación para encontrar la más cercana
                this.getUserLocation().then(() => {
                    if (this.userLocation && data.length > 0) {
                        this.findNearestBranch(data);
                    }
                });
            })
            .catch(error => {
                //console.error('Error al cargar las estaciones:', error);
                this.locationError = "Error cargando estaciones. Por favor intenta más tarde.";
            });

        // Escuchar eventos para mostrar en el mapa
        window.addEventListener('mostrar-mapa', (event) => {
            this.showBranchOnMap(event.detail.estacion);
        });
    },

    async getUserLocation() {
        this.loadingLocation = true;
        this.locationError = null;

        try {
            if (navigator.geolocation) {
                // Limpiar caché de ubicación previa
                this.userLocation = null;

                const position = await new Promise((resolve, reject) => {
                    // Forzar nueva solicitud de permisos
                    navigator.geolocation.getCurrentPosition(
                        resolve,
                        reject,
                        {
                            enableHighAccuracy: true,
                            timeout: 10000,
                            maximumAge: 0 // Cero para forzar nueva obtención
                        }
                    );
                });

                this.userLocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                // Si tenemos estaciones, encontrar la más cercana
                if (Alpine.store('estaciones').all.length > 0) {
                    this.findNearestBranch(Alpine.store('estaciones').all);
                }
            } else {
                this.locationError = "Tu navegador no soporta geolocalización";
            }
        } catch (error) {
            //console.error("Error obteniendo ubicación:", error);
            this.locationError = this.getLocationErrorMessage(error);

            // Si fue un error de permisos, mostrar mensaje específico
            if (error.code === error.PERMISSION_DENIED) {
                this.locationError = "Permiso de ubicación denegado. Por favor, habilita los permisos de ubicación en tu navegador.";
            }
        } finally {
            this.loadingLocation = false;
        }
    },

    getLocationErrorMessage(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                return "Permiso de ubicación denegado. Mostrando estación por defecto.";
            case error.POSITION_UNAVAILABLE:
                return "Información de ubicación no disponible.";
            case error.TIMEOUT:
                return "La solicitud de ubicación tardó demasiado.";
            default:
                return "No pudimos obtener tu ubicación. Mostrando estación por defecto.";
        }
    },

    findNearestBranch(estaciones) {
        if (!this.userLocation || !estaciones.length) return;

        try {
            const estacionesConDistancia = estaciones.map(estacion => {
                if (!estacion.coordenadas ||
                    typeof estacion.coordenadas.lat !== 'number' ||
                    typeof estacion.coordenadas.lng !== 'number') {
                    //console.warn('estacion sin coordenadas válidas:', estacion.nombre);
                    return { ...estacion, distance: Infinity };
                }

                return {
                    ...estacion,
                    distance: this.calculateDistance(
                        this.userLocation.lat,
                        this.userLocation.lng,
                        estacion.coordenadas.lat,
                        estacion.coordenadas.lng
                    )
                };
            });

            estacionesConDistancia.sort((a, b) => a.distance - b.distance);
            const nearest = estacionesConDistancia[0];

            Alpine.store('estaciones').nearest = nearest;
            Alpine.store('estaciones').selected = nearest;
        } catch (error) {
            //console.error('Error al calcular estación más cercana:', error);
            // Mantener la estación por defecto si hay error
            if (estaciones.length > 0) {
                Alpine.store('estaciones').selected = estaciones[0];
            }
        }
    },

    showBranchOnMap(estacion) {
        Alpine.store('estaciones').selected = estacion;
        this.$el.scrollIntoView({ behavior: 'smooth' });
    },

    calculateDistance(lat1, lon1, lat2, lon2) {
        const R = 6371; // Radio de la Tierra en km
        const dLat = this.deg2rad(lat2 - lat1);
        const dLon = this.deg2rad(lon2 - lon1);

        const a =
            Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(this.deg2rad(lat1)) * Math.cos(this.deg2rad(lat2)) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);

        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return R * c; // Distancia en km
    },

    deg2rad(deg) {
        return deg * (Math.PI / 180);
    },

    get mapSrc() {
        const selected = Alpine.store('estaciones').selected;
        const apiKey = import.meta.env.VITE_GOOGLE_MAPS_API_KEY;

        if (!selected) return this.getDefaultMapUrl();

        // Verificar si la estación tiene coordenadas definidas
        const hasCoords = selected.coordenadas &&
            typeof selected.coordenadas.lat === 'number' &&
            typeof selected.coordenadas.lng === 'number';

        // Si tenemos ubicación del usuario Y la estación tiene coordenadas válidas
        if (this.userLocation && hasCoords) {
            const userLatLng = `${this.userLocation.lat},${this.userLocation.lng}`;
            const branchLatLng = `${selected.coordenadas.lat},${selected.coordenadas.lng}`;
            return `https://www.google.com/maps/embed/v1/directions?key=${apiKey}&origin=${userLatLng}&destination=${branchLatLng}&mode=driving`;
        }

        // Si la estación tiene coordenadas válidas
        if (hasCoords) {
            return `https://www.google.com/maps/embed/v1/place?key=${apiKey}&q=${encodeURIComponent(`${selected.coordenadas.lat},${selected.coordenadas.lng}`)
                }&zoom=15&maptype=roadmap`;
        }

        // Si no hay coordenadas pero sí dirección
        if (selected.direccion) {
            return `https://www.google.com/maps/embed/v1/place?key=${apiKey}&q=${encodeURIComponent(selected.direccion)
                }&zoom=15&maptype=roadmap`;
        }

        // Fallback final
        return this.getDefaultMapUrl();
    },

    getDefaultMapUrl() {
        return 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.869920749685!2d-89.6238486845716!3d20.96713698600439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56715dd227c8c5%3A0x5c3f8a1f4e0e9e8f!2sM%C3%A9rida%2C%20Yuc.!5e0!3m2!1ses!2smx!4v1620000000000!5m2!1ses!2smx';
    }
}));

document.addEventListener('alpine:init', () => {
    Alpine.store('estacionTienda', {
        seleccionada: null,
        watchSelection() {
            Alpine.effect(() => {
                const estacion = this.seleccionada;
                document.dispatchEvent(new CustomEvent('estacion-cambiada', {
                    detail: { estacionId: estacion }
                }));
            });
        }
    });
    Alpine.store('estacionTienda').watchSelection();

    Alpine.data('estacionesApp', () => ({
        estaciones: [],
        estacionesFiltradas: [],
        estacionesOrdenadas: [],
        zonasUnicas: [],
        zonaSeleccionada: new URLSearchParams(window.location.search).get('zone') || '',
        currentPage: 1,
        itemsPerPage: 5,
        userLocation: null,
        loadingLocation: false,
        locationError: null,
        hasRequestedLocation: false,

        async init() {
            // Cargamos las sucursales primero
            const res = await fetch('/api/estaciones');
            const data = await res.json();
            this.estaciones = data;
            this.estacionesOrdenadas = [...data];
            this.zonasUnicas = [...new Set(data.map(estacion => estacion.zona))];

            // Luego intentamos obtener la ubicación del usuario
            //await this.getUserLocation();

            // Si hay zona en la URL, filtrar por esa zona
            if (this.zonaSeleccionada) {
                this.estacionesFiltradas = this.estacionesOrdenadas.filter(
                    estacion => estacion.zona === this.zonaSeleccionada
                );
                this.$nextTick(() => {
                    if (this.estacionesFiltradas.length) {
                        Alpine.store('estacionTienda').seleccionada = this.estacionesFiltradas[0].id;
                    }
                });
                return; // No necesitamos la ubicación si ya tenemos zona seleccionada
            }

            // Solo solicitamos ubicación si no lo hemos hecho antes
            if (!this.hasRequestedLocation) {
                await this.getUserLocation();
                this.hasRequestedLocation = true;
            }
        },

        filtrarPorZonaMasCercana() {
            if (!this.userLocation || this.estacionesOrdenadas.length === 0) return;

            // Encontrar la estación más cercana
            const estacionMasCercana = this.estacionesOrdenadas[0];
            this.zonaSeleccionada = estacionMasCercana.zona;

            // Filtrar por la zona de la estación más cercana
            this.estacionesFiltradas = this.estacionesOrdenadas.filter(
                estacion => estacion.zona === this.zonaSeleccionada
            );
        },

        filtrarPorZona() {
            this.currentPage = 1; // Resetear a la primera página al cambiar filtro

            if (!this.zonaSeleccionada) {
                // Si no hay zona seleccionada, mostrar todas las estaciones ordenadas por distancia
                this.estacionesFiltradas = this.userLocation
                    ? [...this.estacionesOrdenadas]
                    : [...this.estaciones];
                return;
            }

            // Filtrar por la zona seleccionada
            this.estacionesFiltradas = this.estacionesOrdenadas.filter(
                estacion => estacion.zona === this.zonaSeleccionada
            );
        },

        async getUserLocation() {
            this.loadingLocation = true;
            this.locationError = null;

            try {
                if (navigator.geolocation) {
                    const position = await new Promise((resolve, reject) => {
                        navigator.geolocation.getCurrentPosition(
                            resolve,
                            reject,
                            {
                                enableHighAccuracy: true,
                                timeout: 10000,
                                maximumAge: 300000 // Cache de 5 minutos
                            }
                        );
                    });

                    this.userLocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    this.ordenarEstacionesPorDistancia();
                    this.filtrarPorZonaMasCercana();
                } else {
                    this.locationError = "Geolocalización no soportada";
                    this.estacionesFiltradas = [...this.estacionesOrdenadas];
                }
            } catch (error) {
                console.error("Error obteniendo ubicación:", error);
                this.locationError = this.getLocationErrorMessage(error);
                this.estacionesFiltradas = [...this.estacionesOrdenadas];
            } finally {
                this.loadingLocation = false;
            }
        },

        getLocationErrorMessage(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    return "Permiso de ubicación denegado. Mostrando todas las estaciones.";
                case error.POSITION_UNAVAILABLE:
                    return "Información de ubicación no disponible. Mostrando todas las estaciones.";
                case error.TIMEOUT:
                    return "La solicitud de ubicación tardó demasiado. Mostrando todas las estaciones.";
                default:
                    return "No pudimos obtener tu ubicación. Mostrando todas las estaciones.";
            }
        },


        ordenarEstacionesPorDistancia() {
            if (!this.userLocation || this.estaciones.length === 0) return;

            // Calcular distancia para cada estación y ordenar
            this.estacionesOrdenadas = this.estaciones.map(estacion => {
                if (!estacion.coordenadas) {
                    return { ...estacion, distance: Infinity };
                }

                const distance = this.calculateDistance(
                    this.userLocation.lat,
                    this.userLocation.lng,
                    estacion.coordenadas.lat,
                    estacion.coordenadas.lng
                );

                return { ...estacion, distance };
            }).sort((a, b) => a.distance - b.distance);
        },

        calculateDistance(lat1, lon1, lat2, lon2) {
            const R = 6371;
            const dLat = this.deg2rad(lat2 - lat1);
            const dLon = this.deg2rad(lon2 - lon1);

            const a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(this.deg2rad(lat1)) * Math.cos(this.deg2rad(lat2)) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);

            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            return R * c;
        },

        deg2rad(deg) {
            return deg * (Math.PI / 180);
        },

        get estacionesVisibles() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            return this.estacionesFiltradas.slice(start, start + this.itemsPerPage);
        },

        get totalPages() {
            return Math.ceil(this.estacionesFiltradas.length / this.itemsPerPage);
        },

        nextPage() {
            if (this.currentPage < this.totalPages) {
                this.currentPage++;
            }
        },

        previousPage() {
            if (this.currentPage > 1) {
                this.currentPage--;
            }
        },

        goToPage(page) {
            this.currentPage = page;
        },

        mostrarMapa(estacion) {
            Alpine.store('estaciones').selected = estacion;
            this.$dispatch('mostrar-mapa', {
                estacion
            });
        }
    }));
});


document.addEventListener('alpine:init', () => {
    Alpine.data('cookieConsent', () => ({
        showConsent: false,
        showCustomize: false,
        preferences: {
            necessary: true,
            analytics: false,
            marketing: false
        },

        init() {
            // Verificar si ya hay consentimiento guardado
            const consent = this.getCookie('cookie_consent');

            // Mostrar banner si no hay consentimiento o si fue rechazado
            if (!consent || consent === 'rejected') {
                this.showConsent = true;

                // Cargar preferencias guardadas si existen
                const savedPrefs = localStorage.getItem('cookie_preferences');
                if (savedPrefs) {
                    this.preferences = JSON.parse(savedPrefs);
                }
            } else if (consent === 'accepted') {
                // Si ya fue aceptado, cargar todas las cookies
                this.loadAllCookies();
            }
        },

        acceptAll() {
            this.preferences = {
                necessary: true,
                analytics: true,
                marketing: true
            };
            this.setCookie('cookie_consent', 'accepted', 365);
            this.savePreferences();
            this.loadAllCookies();
            this.showConsent = false;
        },

        acceptNecessary() {
            this.preferences = {
                necessary: true,
                analytics: false,
                marketing: false
            };
            this.setCookie('cookie_consent', 'necessary', 365);
            this.savePreferences();
            this.showConsent = false;
        },

        rejectAll() {
            this.preferences = {
                necessary: true, // Las necesarias no se pueden rechazar
                analytics: false,
                marketing: false
            };
            this.setCookie('cookie_consent', 'rejected', 365);
            this.savePreferences();
            this.showConsent = false;

            // Opcional: Mostrar mensaje de confirmación
            alert('Has rechazado todas las cookies no esenciales. Algunas funcionalidades del sitio pueden no estar disponibles.');
        },

        customize() {
            this.showCustomize = true;
        },

        savePreferences() {
            // Determinar estado general del consentimiento
            const consentStatus = (this.preferences.analytics || this.preferences.marketing)
                ? 'accepted'
                : 'necessary';

            this.setCookie('cookie_consent', consentStatus, 365);
            localStorage.setItem('cookie_preferences', JSON.stringify(this.preferences));

            // Cargar scripts según preferencias
            if (this.preferences.analytics) {
                this.loadAnalyticsCookies();
            } else {
                this.unloadAnalyticsCookies();
            }

            if (this.preferences.marketing) {
                this.loadMarketingCookies();
            } else {
                this.unloadMarketingCookies();
            }

            this.showCustomize = false;
            this.showConsent = false;
        },

        loadAllCookies() {
            this.loadAnalyticsCookies();
            this.loadMarketingCookies();
        },

        loadAnalyticsCookies() {
            // Google Analytics
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', '{{ env("GOOGLE_ANALYTICS_ID") }}');

            if (!document.querySelector('script[src*="googletagmanager.com"]')) {
                const script = document.createElement('script');
                script.src = `https://www.googletagmanager.com/gtag/js?id=${'{{ env("GOOGLE_ANALYTICS_ID") }}'}`;
                script.async = true;
                document.head.appendChild(script);
            }
        },

        unloadAnalyticsCookies() {
            // Eliminar Google Analytics
            window['ga-disable-{{ env("GOOGLE_ANALYTICS_ID") }}'] = true;
            document.cookie = '_ga=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            document.cookie = '_gat=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            document.cookie = '_gid=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

            console.log('Google Analytics descargado');
        },

        loadMarketingCookies() {
            // Facebook Pixel
            if (!window.fbq) {
                !function (f, b, e, v, n, t, s) {
                    if (f.fbq) return; n = f.fbq = function () {
                        n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
                    n.queue = []; t = b.createElement(e); t.async = !0;
                    t.src = v; s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            }
            fbq('init', '{{ env("FACEBOOK_PIXEL_ID") }}');
            fbq('track', 'PageView');
        },

        unloadMarketingCookies() {
            // Deshabilitar Facebook Pixel
            window['fbq'] = function () { console.log('Facebook Pixel bloqueado por preferencias del usuario'); };
            document.cookie = '_fbp=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';

            console.log('Facebook Pixel descargado');
        },

        setCookie(name, value, days) {
            let expires = "";
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
        },

        getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }
    }));
});

Alpine.start()
