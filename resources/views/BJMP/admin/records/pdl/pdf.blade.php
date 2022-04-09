<!DOCTYPE html>



<html>

<head>

    <title> Medical Record </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="This ">

    <meta name="author" content="Code With Mark">
    <meta name="authorUrl" content="http://codewithmark.com">

    <!--[CSS/JS Files - Start]-->
    <link rel="stylesheet" href="/css/medical.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!--  <link rel="stylesheet" href="/css/PDF.css"> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function($) {

            $(document).on('click', '.btn_print', function(event) {
                event.preventDefault();

                //credit : https://ekoopmans.github.io/html2pdf.js

                var element = document.getElementById('container_content');

                //easy
                //html2pdf().from(element).save();

                //custom file name
                //html2pdf().set({filename: 'code_with_mark_'+js.AutoCode()+'.pdf'}).from(element).save();


                //more custom settings
                var opt = {
                    margin: .5,
                    filename: 'PDF-PDL_' + js.AutoCode() + '.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                };

                // New Promise-based usage:
                html2pdf().set(opt).from(element).save();


            });



        });
    </script>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');
    .logo img {
    height: 70px;
    width: 70px;
    margin: 0 20px;
}

.page-title h2 {
    font-size: 20px;
    font-family: 'Poppins', sans-serif !important;
    margin-left: auto;
    margin-right: auto;
}
</style>

</head>

<body>



    <div class="container_content" id="container_content">
        <section>
            <div class="top-bar d-flex justify-content-center align-items-center mt-3">
                <div class="logo">
                    <img class="img-fluid mr-2" src="/img/bjmp-logo.png" alt="">
                </div>
                <div class="page-title w-50">
                    <h2 class="text-center">Republic of the Philippines</h2>
                    <hr>
                    <h2 class="text-center">Municipal Jail of Los Baños Laguna</h2>
                    <!--      <h2 class="text-center">Los Baños Laguna</h2> -->
                </div>
                <div class="logo">
                    <img class="img-fluid ml-2" src="/img/rep-logo.png" alt="">
                </div>
            </div>

            <div class="middle-bar">
                <hr>
                <h2>Medical Record</h2>
                <hr>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="medical">
                    <thead class="table-secondary text-black">
                        <tr>
                            <th>Full name</th>
                            <th>Birthdate</th>
                            <th>Address</th>
                            <th>Date of Commitment</th>
                            <th>Offense</th>
                            <th>Case number</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($records as $record)
                            <tr>

                                <td>{{ $record->name }}</td>
                                <td>{{ $record->birthdate }}</td>
                                <td>{{ $record->address }}</td>
                                <td>{{ $record->date_of_commitment }}</td>
                                <td>{{ $record->offense }}</td>
                                <td>{{ $record->case_number }}</td>
                            </tr>

                        @endforeach



                    </tbody>

                </table>
            </div>


        </section>


    </div>

    <div class="text-center" style="padding:20px;">
        <input type="button" id="rep" value="Print" class="btn btn-info btn_print">
    </div>



</body>

</html>
