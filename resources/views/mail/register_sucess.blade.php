
<table>
    <tr>
        <td></td>
        <td>
            <div>
                <table>
                   
                    <tr>
                        <td>
                            Dear <strong>{{ $view_message['name'] }}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Congratulations! Your registration with {{siteName()}} is now complete. We are delighted to welcome you to our community.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Here are the details you provided during the registration process:
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>Login Id: <b>{{ $view_message['username'] }}</b></td>
                                </tr>
                                <tr>
                                    <td>Password: <b>{{ $view_message['password'] }}</b></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                   
                        <td>
                            Best regards,<br>
                            {{siteName()}} 
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
