<script>

$('#file-0').fileinput({
    theme: 'fas',
    'allowedFileExtensions': ['jpg', 'png', 'gif']
});
$('#file-1').fileinput({
    theme: 'fas',
    uploadUrl: '#', // you must set a valid URL here else you will get an error
    allowedFileExtensions: ['jpg', 'png', 'gif'],
    overwriteInitial: false,
    maxFileSize: 1000,
    maxFilesNum: 10,
    //allowedFileTypes: ['image', 'video', 'flash'],
    slugCallback: function (filename) {
        return filename.replace('(', '_').replace(']', '_');
    }
});

$(document).ready(function () {
    $('#test-upload').fileinput({
        'theme': 'fas',
        'showPreview': false,
        'allowedFileExtensions': ['jpg', 'png', 'gif'],
        'elErrorContainer': '#errorBlock'
    });
    $('#kv-explorer').fileinput({
        'theme': 'explorer-fas',
        'uploadUrl': '#',
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreview: [
            'http://lorempixel.com/1920/1080/nature/1',
            'http://lorempixel.com/1920/1080/nature/2',
            'http://lorempixel.com/1920/1080/nature/3'
        ],
        initialPreviewConfig: [
            {caption: 'nature-1.jpg', size: 329892, width: '120px', url: '{$url}', key: 1},
            {caption: 'nature-2.jpg', size: 872378, width: '120px', url: '{$url}', key: 2},
            {caption: 'nature-3.jpg', size: 632762, width: '120px', url: '{$url}', key: 3}
        ]
    });
    /*
     $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
     alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
     });
     */
});
</script>