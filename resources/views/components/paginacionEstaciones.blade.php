<div class="flex justify-center items-center mt-12 space-x-2" x-show="totalPages > 1">
    <button @click="previousPage" :disabled="currentPage === 1"
        class="flex items-center px-4 py-2 rounded-lg border border-gray-300 text-gray-700 disabled:opacity-50 disabled:cursor-not-allowed hover:bg-gray-50 transition">
        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        Anterior
    </button>

    <template x-for="page in totalPages" :key="page">
        <button @click="goToPage(page)"
            :class="{
                'bg-[#d11a50] text-white border-[#d11a50]': currentPage === page,
                'text-gray-700 border-gray-300 hover:bg-gray-50': currentPage !== page
            }"
            class="w-10 h-10 rounded-lg border flex items-center justify-center transition">
            <span x-text="page"></span>
        </button>
    </template>

    <button @click="nextPage" :disabled="currentPage === totalPages"
        class="flex items-center px-4 py-2 rounded-lg border border-gray-300 text-gray-700 disabled:opacity-50 disabled:cursor-not-allowed hover:bg-gray-50 transition">
        Siguiente
        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>
