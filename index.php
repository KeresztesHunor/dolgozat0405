<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stilus.css">
        <title>Keresztes Hunor</title>
    </head>
    <body>
        <article>
            <table>
                <thead>
                    <tr>
                        <th>Vezetéknév</th>
                        <th>Keresztnév</th>
                        <th>Születés éve</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $vezezeknevek = array(
                            "Agyalá",
                            "Nagy",
                            "Szabó",
                            "Kovács",
                            "Hofi"
                        );
                        $keresztnevek = array(
                            "Gyula",
                            "Tibor",
                            "Klára",
                            "Tóbiás",
                            "Géza"
                        );
                        $szuletesiEvek = array();
                        for ($i = 0; $i < 5; $i++)
                        {
                            $szuletesiEvek[$i] = rand(1998, 2005);
                        }
                        for ($i = 0; $i < 5; $i++)
                        {
                            echo ujTagekKozeIr("tr", null, (function() use(&$i, &$vezezeknevek, &$keresztnevek, &$szuletesiEvek)
                            {
                                $txt = "";
                                $txt .= ujTagekKozeIr("td", null, $vezezeknevek[$i]);
                                $txt .= ujTagekKozeIr("td", null, $keresztnevek[$i]);
                                $txt .= ujTagekKozeIr("td", null, $szuletesiEvek[$i]);
                                return $txt;
                            })());
                        }

                        function ujTagekKozeIr($tag, $parameterek = null, $tartalom = "")
                        {
                            return "<$tag".($parameterek ? " $parameterek" : "").">$tartalom</$tag>";
                        }
                    ?>
                </tbody>
            </table>
        </article>
    </body>
</html>