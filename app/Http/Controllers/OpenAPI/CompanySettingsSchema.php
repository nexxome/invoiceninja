<?php
/**
 * @OA\Schema(
 *   schema="CompanySettings",
 *   type="object",
 *       @OA\Property(property="timezone_id", type="string", example="15", description="The timezone id"),
 *       @OA\Property(property="date_format_id", type="string", example="15", description="____________"),
 *       @OA\Property(property="military_time", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="language_id", type="string", example="1", description="____________"),
 *       @OA\Property(property="show_currency_code", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="currency_id", type="string", example=true, description="The settings currency id"),
 *       @OA\Property(property="payment_terms", type="integer", example="1", description="-1 sets no payment term, 0 sets payment due immediately, positive integers indicates payment terms in days"),
 *       @OA\Property(property="company_gateway_ids", type="string", example="1,2,3,4", description="A commad separate list of available gateways"),
 *       @OA\Property(property="custom_value1", type="string", example="Custom Label", description="____________"),
 *       @OA\Property(property="custom_value2", type="string", example="Custom Label", description="____________"),
 *       @OA\Property(property="custom_value3", type="string", example="Custom Label", description="____________"),
 *       @OA\Property(property="custom_value4", type="string", example="Custom Label", description="____________"),
 *       @OA\Property(property="custom_invoice_taxes1", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="custom_invoice_taxes2", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="custom_invoice_taxes3", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="custom_invoice_taxes4", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="default_task_rate", type="number", format="float", example="10.00", description="____________"),
 *       @OA\Property(property="send_reminders", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="enable_client_portal_tasks", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="email_style", type="string", example="light", description="options include plain,light,dark,custom"),
 *       @OA\Property(property="reply_to_email", type="string", example="email@gmail.com", description="The reply to email address"),
 *       @OA\Property(property="bcc_email", type="string", example="email@gmail.com, contact@gmail.com", description="A comma separate list of BCC emails"),
 *       
 *       @OA\Property(property="pdf_email_attachment", type="boolean", example=true, description="Toggles whether to attach PDF as attachment"),
 *       @OA\Property(property="ubl_email_attachment", type="boolean", example=true, description="Toggles whether to attach UBL as attachment"),
 *       @OA\Property(property="email_style_custom", type="string", example="<HTML></HTML>", description="The custom template"),
 *       @OA\Property(property="custom_message_dashboard", type="string", example="Please pay invoices immediately", description="____________"),
 *       @OA\Property(property="custom_message_unpaid_invoice", type="string", example="Please pay invoices immediately", description="____________"),
 *       @OA\Property(property="custom_message_paid_invoice", type="string", example="Thanks for paying this invoice!", description="____________"),
 *       @OA\Property(property="custom_message_unapproved_quote", type="string", example="Please approve quote", description="____________"),
 *       @OA\Property(property="lock_sent_invoices", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="auto_archive_invoice", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="auto_archive_quote", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="auto_convert_quote", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="inclusive_taxes", type="boolean", example=true, description="____________"),
 *       @OA\Property(property="translations", type="object", example="", description="JSON payload of customized translations"),
 *       @OA\Property(property="task_number_prefix", type="string", example="R", description="This string is prepended to the task number"),
 *       @OA\Property(property="task_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the task number pattern"),
 *       @OA\Property(property="task_number_counter", type="integer", example="1", description="____________"),
 *       @OA\Property(property="expense_number_prefix", type="string", example="R", description="This string is prepended to the expense number"),
 *       @OA\Property(property="expense_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the expense number pattern"),
 *       @OA\Property(property="expense_number_counter", type="integer", example="1", description="____________"),
 *       @OA\Property(property="vendor_number_prefix", type="string", example="R", description="This string is prepended to the vendor number"),
 *       @OA\Property(property="vendor_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the vendor number pattern"),
 *       @OA\Property(property="vendor_number_counter", type="integer", example="1", description="____________"),
 *       @OA\Property(property="ticket_number_prefix", type="string", example="R", description="This string is prepended to the ticket number"),
 *       @OA\Property(property="ticket_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the ticket number pattern"),
 *       @OA\Property(property="ticket_number_counter", type="integer", example="1", description="____________"),
 *
 *       @OA\Property(property="payment_number_prefix", type="string", example="R", description="This string is prepended to the payment number"),
 *       @OA\Property(property="payment_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the payment number pattern"),
 *       @OA\Property(property="payment_number_counter", type="integer", example="1", description="____________"),
 *       @OA\Property(property="invoice_number_prefix", type="string", example="R", description="This string is prepended to the invoice number"),
 *       @OA\Property(property="invoice_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the invoice number pattern"),
 *       @OA\Property(property="invoice_number_counter", type="integer", example="1", description="____________"),
 *       @OA\Property(property="quote_number_prefix", type="string", example="R", description="This string is prepended to the quote number"),
 *       @OA\Property(property="quote_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the quote number pattern"),
 *       @OA\Property(property="quote_number_counter", type="integer", example="1", description="____________"),
 *       @OA\Property(property="client_number_prefix", type="string", example="R", description="This string is prepended to the client number"),
 *       @OA\Property(property="client_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the client number pattern"),
 *       @OA\Property(property="client_number_counter", type="integer", example="1", description="____________"),
 *       @OA\Property(property="credit_number_prefix", type="string", example="R", description="This string is prepended to the credit number"),
 *       @OA\Property(property="credit_number_pattern", type="string", example="{$year}-{$counter}", description="Allows customisation of the credit number pattern"),
 *       @OA\Property(property="credit_number_counter", type="integer", example="1", description="____________"),
 *       @OA\Property(property="recurring_invoice_number_prefix", type="string", example="R", description="This string is prepended to the recurring invoice number"),
 *       @OA\Property(property="reset_counter_frequency_id", type="integer", example="1", description="CONSTANT which is used to apply the frequency which the counters are reset"),
 *       @OA\Property(property="reset_counter_date", type="string", example="2019-01-01", description="The explicit date which is used to reset counters"),
 *       @OA\Property(property="counter_padding", type="integer", example="1", description="Pads the counter with leading zeros"),
 *       @OA\Property(property="shared_invoice_quote_counter", type="boolean", example=true, description="Flags whether to share the counter for invoices and quotes"),
 *       @OA\Property(property="update_products", type="boolean", example=true, description="Determines if client fields are updated from third party APIs"),
 *       @OA\Property(property="convert_products", type="boolean", example=true, description=""),
 *       @OA\Property(property="fill_products", type="boolean", example=true, description="Automatically fill products based on product_key"),
 *       @OA\Property(property="invoice_terms", type="string", example="Invoice Terms are...", description="The default invoice terms"),
 *       @OA\Property(property="quote_terms", type="string", example="Quote Terms are...", description="The default quote terms"),
 *       @OA\Property(property="invoice_taxes", type="boolean", example=true, description="Taxes can be applied to the invoice"),
 *       @OA\Property(property="invoice_item_taxes", type="boolean", example=true, description="Taxes can be applied to the invoice items"),
 *       @OA\Property(property="invoice_design_id", type="string", example="1", description="The default design id (invoice, quote etc)"),
 *       @OA\Property(property="quote_design_id", type="string", example="1", description="The default design id (invoice, quote etc)"),
 *       @OA\Property(property="invoice_footer", type="string", example="1", description="The default invoice footer"),
 *       @OA\Property(property="invoice_labels", type="string", example="1", description="JSON string of invoice labels"),
 *       @OA\Property(property="show_item_taxes", type="boolean", example=true, description="Toggles whether the itemised taxes are displayed"),
 *       @OA\Property(property="tax_rate1", type="number", example="10", description="The tax rate (float)"),
 *       @OA\Property(property="tax_name1", type="string", example="GST", description="The tax name"),
 *       @OA\Property(property="tax_rate2", type="number", example="10", description="The tax rate (float)"),
 *       @OA\Property(property="tax_name2", type="string", example="GST", description="The tax name"),
 *       @OA\Property(property="tax_rate3", type="number", example="10", description="The tax rate (float)"),
 *       @OA\Property(property="tax_name3", type="string", example="GST", description="The tax name"),
 *       @OA\Property(property="enable_second_tax_rate", type="boolean", example=true, description="Toggles whether the a second tax rate can be applied"),
 *       @OA\Property(property="payment_type_id", type="string", example="1", description="The default payment type id"),
 *       @OA\Property(property="custom_fields", type="string", example="{}", description="JSON string of custom fields"),
 *       @OA\Property(property="invoice_fields", type="string", example="{}", description="JSON string of invoice fields"),
 *       @OA\Property(property="email_footer", type="string", example="A default email footer", description="The default email footer"),
 *       @OA\Property(property="email_subject_invoice", type="string", example="Your Invoice Subject", description=""),
 *       @OA\Property(property="email_subject_quote", type="string", example="Your Quote Subject", description=""),
 *       @OA\Property(property="email_subject_payment", type="string", example="Your Payment Subject", description=""),
 *       @OA\Property(property="email_template_invoice", type="string", example="<HTML></HTML>", description="The full template for invoice emails"),
 *       @OA\Property(property="email_template_quote", type="string", example="<HTML></HTML>", description="The full template for quote emails"),
 *       @OA\Property(property="email_template_payment", type="string", example="<HTML></HTML>", description="The full template for payment emails"),
 *       @OA\Property(property="email_subject_reminder1", type="string", example="<HTML></HTML>", description="Email subject for Reminder"),
 *       @OA\Property(property="email_subject_reminder2", type="string", example="<HTML></HTML>", description="Email subject for Reminder"),
 *       @OA\Property(property="email_subject_reminder3", type="string", example="<HTML></HTML>", description="Email subject for Reminder"),
 *       @OA\Property(property="email_subject_reminder_endless", type="string", example="<HTML></HTML>", description="Email subject for endless reminders"),
 *       @OA\Property(property="email_template_reminder1", type="string", example="<HTML></HTML>", description="The full template for Reminder 1"),
 *       @OA\Property(property="email_template_reminder2", type="string", example="<HTML></HTML>", description="The full template for Reminder 2"),
 *       @OA\Property(property="email_template_reminder3", type="string", example="<HTML></HTML>", description="The full template for Reminder 3"),
 *       @OA\Property(property="email_template_reminder_endless", type="string", example="<HTML></HTML>", description="The full template for enless reminders"),
 *       @OA\Property(property="enable_portal_password", type="boolean", example=true, description="Toggles whether a password is required to log into the client portal"),
 *       @OA\Property(property="show_accept_invoice_terms", type="boolean", example=true, description="Toggles whether the terms dialogue is shown to the client"),
 *       @OA\Property(property="show_accept_quote_terms", type="boolean", example=true, description="Toggles whether the terms dialogue is shown to the client"),
 *       @OA\Property(property="require_invoice_signature", type="boolean", example=true, description="Toggles whether a invoice signature is required"),
 *       @OA\Property(property="require_quote_signature", type="boolean", example=true, description="Toggles whether a quote signature is required"),
 *       @OA\Property(property="name", type="string", example="Acme Co", description="The company name"),
 *       @OA\Property(property="company_logo", type="object", example="logo.png", description="The company logo file"),
 *       @OA\Property(property="website", type="string", example="www.acme.com", description="The company website URL"),
 *       @OA\Property(property="address1", type="string", example="Suite 888", description="____________"),
 *       @OA\Property(property="address2", type="string", example="5 Jimbo Way", description="____________"),
 *       @OA\Property(property="city", type="string", example="Sydney", description="____________"),
 *       @OA\Property(property="state", type="string", example="Florisa", description="____________"),
 *       @OA\Property(property="postal_code", type="string", example="90210", description="____________"),
 *       @OA\Property(property="phone", type="string", example="555-213-3948", description="____________"),
 *       @OA\Property(property="email", type="string", example="joe@acme.co", description="____________"),
 *       @OA\Property(property="country_id", type="string", example="1", description="The country ID"),
 *       @OA\Property(property="vat_number", type="string", example="32 120 377 720", description="____________"),
 *       @OA\Property(property="page_size", type="string", example="A4", description="The default page size"),
 *       @OA\Property(property="font_size", type="number", example="9", description="The font size"),
 *       @OA\Property(property="primary_font", type="string", example="roboto", description="The primary font"),
 *       @OA\Property(property="secondary_font", type="string", example="roboto", description="The secondary font"),
 *       @OA\Property(property="hide_paid_to_date", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="embed_documents", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="all_pages_header", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="all_pages_footer", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="document_email_attachment", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="enable_client_portal_password", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="enable_email_markup", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="enable_client_portal_dashboard", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="enable_client_portal", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="email_template_statement", type="string", example="template matter", description="____________"),
 *       @OA\Property(property="email_subject_statement", type="string", example="subject matter", description="____________"),
 *       @OA\Property(property="signature_on_pdf", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="send_portal_password", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="quote_footer", type="string", example="the quote footer", description="____________"),
 *       @OA\Property(property="email_subject_custom1", type="string", example="Custom Subject 1", description="____________"),
 *       @OA\Property(property="email_subject_custom2", type="string", example="Custom Subject 2", description="____________"),
 *       @OA\Property(property="email_subject_custom3", type="string", example="Custom Subject 3", description="____________"),
 *       @OA\Property(property="email_template_custom1", type="string", example="<HTML>", description="____________"),
 *       @OA\Property(property="email_template_custom2", type="string", example="<HTML>", description="____________"),
 *       @OA\Property(property="email_template_custom3", type="string", example="<HTML>", description="____________"),
 *       @OA\Property(property="enable_reminder1", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="enable_reminder2", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="enable_reminder3", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="num_days_reminder1", type="number", example="9", description="The Reminder interval"),
 *       @OA\Property(property="num_days_reminder2", type="number", example="9", description="The Reminder interval"),
 *       @OA\Property(property="num_days_reminder3", type="number", example="9", description="The Reminder interval"),
 *       @OA\Property(property="schedule_reminder1", type="string", example="after_invoice_date", description="(enum: after_invoice_date, before_due_date, after_due_date)"),
 *       @OA\Property(property="schedule_reminder2", type="string", example="after_invoice_date", description="(enum: after_invoice_date, before_due_date, after_due_date)"),
 *       @OA\Property(property="schedule_reminder3", type="string", example="after_invoice_date", description="(enum: after_invoice_date, before_due_date, after_due_date)"),
 *       @OA\Property(property="late_fee_amount1", type="string", example="10.00", description="____________"),
 *       @OA\Property(property="late_fee_amount2", type="string", example="20.00", description="____________"),
 *       @OA\Property(property="late_fee_amount3", type="string", example="100.00", description="____________"),
 *       @OA\Property(property="endless_reminder_frequency_id", type="string", example="1", description="____________"),
 *       @OA\Property(property="client_online_payment_notification", type="boolean", example=false, description="____________"),
 *       @OA\Property(property="client_manual_payment_notification", type="boolean", example=false, description="____________"),
 * )
 */