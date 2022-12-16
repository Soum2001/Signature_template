@include('layout.header')

<body class="hold-transition layout-top-nav">
    @include('nav')

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
        <table width="100%" border="0" cellspacing="5" cellpadding="5">
            <tr>
                <td width="50%" scope="col">&nbsp;</td>
                <td width="50%" align="left" scope="col">
                    <input onclick="runCode();" type="button" value="Run Code">
                    <button onclick="storeTemplate();">Store Template</button>
                </td>
            </tr>
            <tr>
        
                <td>
                    <strong>Code</strong>
                    <textarea name="sourceCode" id="sourceCode">
                </textarea>
                </td>
                <td><strong>Output</strong><iframe name="targetCode" id="targetCode"></iframe></td>
            
            </tr>
        </table>

    @include('layout.footer')