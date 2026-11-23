document.addEventListener('DOMContentLoaded', function () {
    const seasonSelect = document.getElementById('seasonSelect');
    const episodeInput = document.getElementById('episodeInput');

    if (!seasonSelect || !episodeInput) return;

    function syncEpisodeWithSeason() {
        const selectedOption = seasonSelect.options[seasonSelect.selectedIndex];
        const rawLast = selectedOption ? selectedOption.dataset.lastEpisode : '';

        if (rawLast === undefined || rawLast === '') {
            episodeInput.value = '1';
            return;
        }

        const lastNumber = Number(rawLast);
        episodeInput.value = Number.isNaN(lastNumber) ? '' : lastNumber + 1;
    }

    seasonSelect.addEventListener('change', syncEpisodeWithSeason);
    syncEpisodeWithSeason();
});
