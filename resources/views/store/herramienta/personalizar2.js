
        var canvas = new fabric.Canvas('can');

        var rect = new fabric.Rect({
            left: 100,
            top: 150,
            fill: 'red',
            width: 200,
            height: 300
        });
        var text2 = new fabric.Textbox ('hello world', {
            left: 100,
            top: 100
        });
        var text = new fabric.Textbox ('hello world', {
            left: 300,
            top: 50
        });

        canvas.add(text2, text);
