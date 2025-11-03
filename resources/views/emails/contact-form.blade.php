<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f5f5f5; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;">

<!-- Email Container -->
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f5f5f5; padding: 40px 20px;">
    <tr>
        <td align="center">

            <!-- Main Content Card -->
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); overflow: hidden;">

                <!-- Header -->
                <tr>
                    <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 40px 40px 30px; text-align: center;">
                        <h1 style="margin: 0; color: #ffffff; font-size: 24px; font-weight: 600; letter-spacing: -0.5px;">
                            New Contact Inquiry
                        </h1>
                        <p style="margin: 8px 0 0; color: rgba(255, 255, 255, 0.9); font-size: 14px;">
                            You have received a new message
                        </p>
                    </td>
                </tr>

                <!-- Content -->
                <tr>
                    <td style="padding: 40px;">

                        <!-- Contact Information Grid -->
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">

                            <!-- Full Name -->
                            <tr>
                                <td style="padding-bottom: 24px;">
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0 0 6px; color: #6b7280; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">
                                                    Full Name
                                                </p>
                                                <p style="margin: 0; color: #1f2937; font-size: 16px; font-weight: 500;">
                                                    {{ strip_tags($data['fullname']) }}
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- Phone & Email Row -->
                            <tr>
                                <td style="padding-bottom: 24px;">
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                        <tr>
                                            <!-- Phone -->
                                            <td width="48%" style="vertical-align: top;">
                                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px;">
                                                    <tr>
                                                        <td>
                                                            <p style="margin: 0 0 6px; color: #6b7280; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">
                                                                Phone
                                                            </p>
                                                            <p style="margin: 0; color: #1f2937; font-size: 15px; font-weight: 500;">
                                                                {{ $data['phone'] }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>

                                            <td width="4%"></td>

                                            <!-- Email -->
                                            <td width="48%" style="vertical-align: top;">
                                                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px;">
                                                    <tr>
                                                        <td>
                                                            <p style="margin: 0 0 6px; color: #6b7280; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">
                                                                Email
                                                            </p>
                                                            <p style="margin: 0; color: #1f2937; font-size: 14px; font-weight: 500; word-break: break-all;">
                                                                {{ $data['email'] }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- Message -->
                            <tr>
                                <td style="padding-bottom: 24px;">
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f8f9fa; border-radius: 8px; padding: 20px;">
                                        <tr>
                                            <td>
                                                <p style="margin: 0 0 12px; color: #6b7280; font-size: 12px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">
                                                    Message
                                                </p>
                                                <div style="margin: 0; padding: 16px; background-color: #ffffff; border-left: 3px solid #667eea; border-radius: 6px; color: #374151; font-size: 15px; line-height: 1.7;">
                                                    {!! nl2br(e($data['message'])) !!}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>

                        <!-- Action Button -->
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 8px;">
                            <tr>
                                <td align="center">
                                    <a href="mailto:{{ $data['email'] }}" style="display: inline-block; padding: 14px 32px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #ffffff; text-decoration: none; border-radius: 8px; font-weight: 600; font-size: 14px; letter-spacing: 0.3px; box-shadow: 0 2px 8px rgba(102, 126, 234, 0.3);">
                                        Reply to {{ strip_tags($data['fullname']) }}
                                    </a>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color: #f8f9fa; padding: 24px 40px; border-top: 1px solid #e5e7eb;">
                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tr>
                                <td style="text-align: center;">
                                    <p style="margin: 0; color: #9ca3af; font-size: 12px; line-height: 1.6;">
                                        <strong style="color: #6b7280;">Submitted:</strong> {{ now()->format('F j, Y \a\t g:i A') }}<br>
                                        <strong style="color: #6b7280;">IP Address:</strong> {{ request()->ip() }}
                                    </p>
                                    <p style="margin: 16px 0 0; color: #9ca3af; font-size: 11px;">
                                        © {{ date('Y') }} Librana. All rights reserved.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
