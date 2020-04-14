<h3>who is domain tools</h3>
  <form action="?domain=" method="get">
  <input type="text" style="width: 300px;" placeholder="input domain..." name="domain">
  <button type="submit">Cari</button>
  </form>
  <?
  if (isset($_GET['domain'])) {
    echo "<pre>";
    $domain = $_GET['domain'];
    $whois=system("whois {$domain}");
    echo $whois;
    echo "</pre>";
  }
<?
