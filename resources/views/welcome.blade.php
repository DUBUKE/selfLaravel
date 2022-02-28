<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Vote Project</title>
    </head>
    <body>
        <div class="container mt-3">
            <h2>Vote Project</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>글번호</th>
                    <th>글제목</th>
                    <th>글쓴이</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>예1</td>
                        <td>김삿갓</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>예ㅔ제2</td>
                        <td>김아무개</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>예3</td>
                        <td>Dooley</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
