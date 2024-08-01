$(document).ready(function() {
	console.log('A paciência é um dos elementos chave para o sucesso.');
    var BASE = "https://enzovilasboas.com.br/romano"

    $('body').on('click', '.A_converter', function () {
        $.post(BASE + '/home/converter/api', {}, function (info) {
            if (info) {
                console.log(info);
                $('.box').html(info);
            }
        });
        return false;
    });

    $('body').on('click', '.A_converterRomano', function () {
        var numeroRomano = $('#numeroRomano').val();
        $.post(BASE + '/home/romano/api', { numeroRomano: numeroRomano }, function (info) {
            if (info) {
                console.log(info);
                $('.box').html(info);
            }
        });
        return false;
    });

    $('body').on('click', '.A_converterReal', function () {
        var numeroReal = $('#numeroReal').val();
        $.post(BASE + '/home/real/api', { numeroReal: numeroReal }, function (info) {
            if (info) {
                console.log(info);
                $('.box').html(info);
            }
        });
        return false;
    });
});