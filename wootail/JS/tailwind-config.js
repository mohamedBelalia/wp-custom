tailwind.config = {
    theme: {
        extend: {
            fontFamily: {
              sans: ['Poppins', 'sans-serif'],
            },
          },
    },
    plugins: [
        function({ addUtilities }) {
            const newUtilities = {
                '.nav-link': {
                    '@apply hover:text-white hover:bg-gradient-to-t from-[#7a160e] to-[#f97d18] px-3 py-2 rounded-md text-sm font-medium transition duration-300 ease-in-out': {},
                },
                '.arrow-btn': {
                    '@apply text-2xl w-[50px] h-[50px] flex justify-center items-center rounded-full hover:text-white hover:bg-gray-900 transition duration-300 ease-in-out': {},
                },
                '.scrollbar-hide': {
                    'overflow': 'hidden',
                    'scrollbar-width': 'none',
                    '-ms-overflow-style': 'none',
                    '&::-webkit-scrollbar': {
                        display: 'none',
                    },
                },
                '.custom-btn-one': {
                    '@apply uppercase px-7 py-2 rounded-full font-bold bg-gray-700 text-white hover:bg-black transition duration-300 ease-in-out': {},
                },
                '.custom-btn-two': {
                    '@apply uppercase px-7 py-2 rounded-full font-bold bg-gradient-to-t hover:bg-gradient-to-b from-[#7a160e] to-[#f97d18] text-white transition duration-300 ease-in-out': {},
                },
                '.custom-btn-three': {
                    '@apply uppercase px-7 py-2 rounded-xl font-semibold bg-gradient-to-t hover:bg-gradient-to-b from-[#7a160e] to-[#f97d18] text-white hover:bg-[#fc3624] transition duration-300 ease-in-out': {},
                },
                '.comment-star': {
                    '@apply bg-green-600 text-white flex justify-center items-center text-xl h-fit w-fit p-0.5': {},
                },
                '.select-list': {
                    '@apply border border-gray-400 rounded-3xl w-full pl-3 h-12 focus:outline-none focus:border-black': {},
                },
                '.info-list': {
                    '@apply relative before:content-["i"] before:flex before:items-center before:justify-center before:w-5 before:h-5 before:rounded-full before:border before:border-gray-500 before:text-gray-500 before:absolute before:-left-8': {},
                },
                '.color-gradient': {
                    '@apply bg-gradient-to-t from-[#7a160e] to-[#f97d18] bg-clip-text text-transparent': {}
                },
                '.bg-gradient-custom': { 
                    '@apply bg-gradient-to-t from-[#7a160e] to-[#f97d18]': {}
                },
            }

            addUtilities(newUtilities, ['responsive', 'hover'])
        }
    ],
}
