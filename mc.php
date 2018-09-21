<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <script type="text/javascript">
        var macAddress = "";
        var ipAddress = "";
        var computerName = "";
        var wmi = GetObject("winmgmts:{impersonationLevel=impersonate}");
        e = new Enumerator(wmi.ExecQuery("SELECT * FROM Win32_NetworkAdapterConfiguration WHERE IPEnabled = True"));
        for (; !e.atEnd() ; e.moveNext()) {
            var s = e.item();
            macAddress = s.MACAddress;
            ipAddress = s.IPAddress(0);
            computerName = s.DNSHostName;
        }
</script>

</head>
<body>
    <form id="form1" runat="server">
    <div>
        <input type="text" id="txtMACAdress" />
        <input type="text" id="txtIPAdress" />
        <input type="text" id="txtComputerName" />

        <script type="text/javascript">
            document.getElementById("txtMACAdress").value = unescape(macAddress);
            document.getElementById("txtIPAdress").value = unescape(ipAddress);
            document.getElementById("txtComputerName").value = unescape(computerName);
        </script>
    </div>
    </form>
</body>
</html>