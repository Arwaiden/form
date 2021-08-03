<html>
<head>
	<meta charset="UTF-8">
	<title>Objednávka</title>
</head>
<body>
		<h1>Souhrn objednávky</h1>
        <h2>Děkujeme, pane/paní <?php echo $_POST['jmeno']; ?>!</h2>
        <p>Objednávka je registrovaná na&nbsp;zákazníka:</p>
		
		<hr>
		
		<p><strong>Jméno:
			<?php echo $_POST['jmeno'] . ' ' . $_POST['prijmeni']; ?></strong>
			<br />
			<strong>Adresa:</strong>
			<?php echo $_POST['ulice'] . ', ' . $_POST['psc'] . ' ' . $_POST['obec']; ?>
		</p>
		<p><strong>E-mail:</strong>
			<?php echo $_POST['email']; ?>
			<br />
			<strong>Mobil:</strong>
			<?php echo $_POST['mobil']; ?>
		</p>
		<p><strong>Firemní údaje:</strong>
			IČ: <?php echo $_POST['ico'] . ' DIČ: ' . $_POST['dic']; ?>
		</p>
		
		<hr>
		
		<h2>PRODUKT:</h2>
		<p>
			<?php echo $_POST['produkt'] . ' v&nbsp;počtu kusů: ' . $_POST['pocet'] . ' á ' . $_POST['cena']; ?>&nbsp;Kč&nbsp;s&nbsp;DPH.
		</p>
		<h2>CELKEM:</h2>
		<h2><?php echo round($_POST['pocet']*$_POST['cena']/1.21, 2); ?> Kč bez&nbsp;DPH
			<br /><br />
			<?php define('CONSTANT_CZE', $_POST['pocet']*$_POST['cena']); ?>
			<?php echo CONSTANT_CZE; ?> Kč s&nbsp;DPH
			<br />
			<?php echo round(CONSTANT_CZE/21.433, 2); ?> USD | <?php echo round(CONSTANT_CZE/29.773, 2); ?> GBP | <?php echo round(CONSTANT_CZE/25.475, 2); ?> EUR s&nbsp;DPH
		</h2>
		
		<hr>
		
		<p>
			<strong>Poznámka:</strong> <?php echo $_POST['poznamka']; ?>
		</p>
		<h2>Děkujeme za&nbsp;objednávku!</h2>
        <p><a href="https://dnesnibrno.cz/test/formular.html">Nová objednávka</a>.</p>
		
		<hr>
		
		<!--kurzy start -->
		
		<div id="kurzy_main" style="padding:2px;text-align:left;">
		<div id="kurzy_head" style="white-space: nowrap;">
		<a href="https://www.kurzy.cz/" 
		title="Kurzy - kurzy měn, akcií, hypotéky"><img loading="lazy" 
		src="https://data.kurzy.cz/export/kurzy-125.gif" 
		style="border:0px" alt="" /></a><br />
		<a href="https://www.kurzy.cz/kurzy-men/"
		title="Kurzy měn, kurzovní lístek ČNB Česká národní banka" 
		id="kurzy_datum">Kurzy ČNB</a>
		</div>
		<table style="width:125px;" id="k__t">
		<tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/USD-americky-dolar/" id="k__USD" title="americký dolar, USA, USD - nejlepší kurzy bank, kurzy ČNB">USD</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/USD.gif" alt="Vlajka meny USD" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__USD"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__USD" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/GBP-britska-libra/" id="k__GBP" title="britská libra, Británie, GBP - nejlepší kurzy bank, kurzy ČNB">GBP</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/GBP.gif" alt="Vlajka meny GBP" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__GBP"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__GBP" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/EUR-euro/" id="k__EUR" title="euro, EMU EURO, EUR - nejlepší kurzy bank, kurzy ČNB">EUR</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/EUR.gif" alt="Vlajka meny EUR" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__EUR"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__EUR" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/HRK-chorvatska-kuna/" id="k__HRK" title="chorvatská kuna, Chorvatsko, HRK - nejlepší kurzy bank, kurzy ČNB">HRK</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/HRK.gif" alt="Vlajka meny HRK" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__HRK"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__HRK" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/JPY-japonsky-jen/" id="k__JPY" title="japonský jen, Japonsko, JPY - nejlepší kurzy bank, kurzy ČNB">JPY</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/JPY.gif" alt="Vlajka meny JPY" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__JPY"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__JPY" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/CAD-kanadsky-dolar/" id="k__CAD" title="kanadský dolar, Kanada, CAD - nejlepší kurzy bank, kurzy ČNB">CAD</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/CAD.gif" alt="Vlajka meny CAD" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__CAD"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__CAD" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/PLN-polsky-zloty/" id="k__PLN" title="polský zlotý, Polsko, PLN - nejlepší kurzy bank, kurzy ČNB">PLN</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/PLN.gif" alt="Vlajka meny PLN" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__PLN"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__PLN" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/RUB-rusky-rubl/" id="k__RUB" title="ruský rubl, Rusko, RUB - nejlepší kurzy bank, kurzy ČNB">RUB</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/RUB.gif" alt="Vlajka meny RUB" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__RUB"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__RUB" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/kurzy-men/nejlepsi-kurzy/CHF-svycarsky-frank/" id="k__CHF" title="švýcarský frank, Švýcarsko, CHF - nejlepší kurzy bank, kurzy ČNB">CHF</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/CHF.gif" alt="Vlajka meny CHF" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__CHF"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__CHF" style="border:0" /></td>
		</tr><tr>
		<td nowrap="nowrap"><a href="https://www.kurzy.cz/akcie-cz/burza/" id="k__PX50" title="Burza cenných papírů Praha, PX 50, akcie CZ online">PX50</a></td>
		<td><img loading="lazy" src="https://img1.kurzy.cz/i/flag/PX50.gif" alt="Vlajka meny PX50" /></td>
		<td nowrap="nowrap" style="text-align: right;" id="kk__PX50"></td>
		<td style="text-align: right;"><img loading="lazy" src="https://img.kurzy.cz/i/flag/arrU.GIF" alt="změna" id="kz__PX50" style="border:0" /></td>
		</tr>
		</table>
		</div>
		<script src="https://data.kurzy.cz/export/kurzy-cs.js" type="text/javascript"> </script>
		
		<!--kurzy end -->
</body>
</html>