@include('layout.header')

<body class="hold-transition layout-top-nav">
    @include('layout.nav')
    <table width="100%" border="0" cellspacing="5" cellpadding="5">
        <tr>
            <td width="50%" scope="col">&nbsp;</td>
            <td width="50%" align="left" scope="col">
                <input onclick="runCode();" type="button" value="Run Code">
            </td>
        </tr>
        <tr>
            <td>
                <form>
                    <strong>Code</strong>
                    <textarea name="sourceCode" id="sourceCode">
                    </textarea>
                </form>
            </td>
            <td><strong>Output</strong><iframe name="targetCode" id="targetCode"></iframe></td>
        </tr>
    </table>
    @include('layout.footer')