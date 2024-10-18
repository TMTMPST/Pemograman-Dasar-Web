$(document).ready(function() {
    function initCircle(id, value, max, format) {
        $(id).circleProgress({
            value: value / max,
            size: 150,
            fill: { color: '#4CAF50' },
            emptyFill: '#FF0000',
            animation: { duration: 1200 },
            animationStartValue: 0.0,
            reverse: false,
        }).on('circle-animation-progress', function(event, progress, stepValue) {
            var formattedValue = format(stepValue * max);
            $(this).find('.circle-stat-value').text(formattedValue);
        });
    }

    initCircle('#kd', 1.29, 1.5, value => value.toFixed(2));
    initCircle('#hltv', 1.41, 1, value => value.toFixed(2));
    initCircle('#winrate', 0.49, 1, value => (value * 100).toFixed(0) + '%');
});