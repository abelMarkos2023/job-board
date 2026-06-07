<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtisanJobs // Premium Laravel & Tailwind Engineering Careers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @layer utilities {
            .bg-grid-pattern {
                background-size: 40px 40px;
                background-image: linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            }
        }

        @keyframes subtlePulse {

            0%,
            100% {
                opacity: 0.15;
                transform: scale(1);
            }

            50% {
                opacity: 0.25;
                transform: scale(1.05);
            }
        }

        .animate-subtle-glow {
            animation: subtlePulse 8s ease-in-out infinite;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }
    </style>
</head>