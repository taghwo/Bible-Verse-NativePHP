

<!DOCTYPE html>
<html lang="en">
<body style="background: black">
<div id="ourmanna-verse">
	<div id="mannaverse-container">
		<p id="mannaverse">
		</p>
		<p id="mannaverse-reference">
		</p>
	</div>
    <button class="refresh-button" onclick="randomVerse()">New Verse</button>
</div>
</body>
</html>

<script>
    async function randomVerse() {
        const response = await fetch("https://labs.bible.org/api/?passage=random&type=json");
        const verse = await response.json();
        document.getElementById("mannaverse").innerHTML = verse[0].text;
        document.getElementById("mannaverse-reference").innerHTML = `${verse[0].bookname} ${verse[0].chapter}:${verse[0].verse}`;
        }

    randomVerse();

</script>

<style>
    #ourmanna-verse {
    padding: 10px;
    margin:10px;
    background: #000;
    border-color: #1c1b1b;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
#mannaverse {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #fff;
}
#mannaverse-reference:before {
    content: "- ";
}
#mannaverse-reference {
    color: #a49f9f;
    text-align: right;
    font-size: 14px;
    font-style: italic;
}
#mannaverse-version {
    color: #a49f9f;
;
}
.refresh-button{
    border: none;
    background: rgb(85, 86, 88);
    color: white;
    padding: 8px;
    float: right;
}
</style>