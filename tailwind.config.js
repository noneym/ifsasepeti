/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './app/Livewire/**/*.php',
        './app/View/Components/**/*.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'system-ui', '-apple-system', 'Segoe UI', 'Roboto', 'sans-serif'],
                display: ['Poppins', 'Inter', 'system-ui', 'sans-serif'],
            },
            colors: {
                ifsa: {
                    yellow: '#FFD23F',
                    orange: '#F58220',
                    red: '#E53935',
                    bg: '#F4F5F8',
                    card: '#FFFFFF',
                    ink: '#1F2430',
                    muted: '#6B7280',
                    border: '#E5E7EB',
                },
            },
            boxShadow: {
                card: '0 1px 2px rgba(16,24,40,.04), 0 4px 16px rgba(16,24,40,.06)',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};
