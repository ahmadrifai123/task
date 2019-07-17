<html>
    <head>
        <title>halaman</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <form>
            <label for="">input jumlah:</label>
            <input type="text" id="uang">
            <br>
            <label for="">mata uang:</label>
            <select name="" id="konversi">
                <option value=""></option>
            </select>
            <br>
            <label for="">hasil:</label>
            <input type="text" id="hasil">
            <br>
            <button type="submit">Jumlah</button>
        </form>
        <script>
        $(function(){
            var url = "https://free.currconv.com"
            var api = "63c7343eac8e4fd6dacd"
            $.ajax({
                url:url+"/api/v7/currencies?apiKey="+api,
                type:"get",
                success:function(res){
                    var matauang = res.results
                    // console.log(matauang)
                    var htmls = ''
                    $.each(matauang,function(id,res){
                        htmls += '<option value="'+res.id+'">'+res.currencyName+'</option>'
                    });
                    $('select#konversi').append(htmls);
                }
            });
            var uang = $('input#uang').val()
            $.ajax({
                url:"",
                type:"get",
                data:"",
                success:function(res){
                    $('input#hasil').val();
                },
                error:function(){
                    alert('Error koneksi')
                }
            })
        })
        </script>
    </body>
</html>