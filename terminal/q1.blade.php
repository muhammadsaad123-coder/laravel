<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
    <h2>HTML Table with Nested Tables</h2>
    <table border="1" style="border-collapse: collapse; width: 100%;">
        <tr>
            <th style="padding: 8px;">Header column 1</th>
            <th style="padding: 8px;">Header column 2</th>
            <th style="padding: 8px;">Header column 3</th>
            <th style="padding: 8px;">Header column 4</th>
        </tr>
        <tr>
            <td style="padding: 8px;">Row 2 - Item 1</td>
            <td style="padding: 8px;">Row 2 - Item 2</td>
            <td rowspan="3" style="padding: 8px;">
                Row 2: Nested Table 1
                <table border="1" style="border-collapse: collapse; width: 100%;">
                    <tr>
                        <th style="padding: 8px;">Row 1 Header</th>
                        <td style="padding: 8px;">item</td>
                    </tr>
                    <tr>
                        <th style="padding: 8px;">Row 2 Header</th>
                        <td style="padding: 8px;">item</td>
                    </tr>
                    <tr>
                        <th style="padding: 8px;">Row 2 Header</th>
                        <td style="padding: 8px;">item</td>
                    </tr>
                </table>
            </td>
            <td style="padding: 8px;">
                Row 2 - Item 4<br>
                A second line
            </td>
        </tr>
        <tr>
            <td rowspan="2" style="padding: 8px;">
                Row 3: Nested Table 2
                <table border="1" style="border-collapse: collapse; width: 100%;">
                    <tr>
                        <th style="padding: 8px;">Row 1 Header</th>
                        <td style="padding: 8px;">item</td>
                    </tr>
                    <tr>
                        <th style="padding: 8px;">Row 2 Header</th>
                        <td style="padding: 8px;">item</td>
                    </tr>
                </table>
            </td>
            <td style="padding: 8px;">Row 3 - Item 2</td>
            <td style="padding: 8px;">Row 3 - Item 3</td>
        </tr>
        <tr>
            <td style="padding: 8px;">Row 4 - Item 2</td>
            <td style="padding: 8px;">Row 4 - Item 3</td>
        </tr>
        <tr>
            <td colspan="4" style="padding: 8px;">Row 5 - Last row of outer table</td>
        </tr>
    </table>
</body>
</html>
