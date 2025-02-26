<?php

declare(strict_types=1);

namespace Modules\Job\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'command' => 'required',
            'command_custom' => 'nullable|string|required_if:command,custom',
            'expression' => 'required|cron',
            'webhook_before' => 'nullable|url',
            'webhook_after' => 'nullable|url',
            'email_output' => 'requiredIf:sendmail_error,1|requiredIf:sendmail_success,1|nullable|email',
            'log_filename' => 'nullable|alpha_dash',
            'groups' => 'nullable|regex:/^[A-Za-z-_0-9,]*$/',
            'environments' => 'nullable|regex:/^[A-Za-z-_0-9,]*$/',
        ];
    }

    public function attributes()
    {
        return [
            'command' => mb_strtolower(trans('schedule::schedule.fields.command')),
            'arguments' => mb_strtolower(trans('schedule::schedule.fields.arguments')),
            'options' => mb_strtolower(trans('schedule::schedule.fields.options')),
            'expression' => mb_strtolower(trans('schedule::schedule.fields.expression')),
        ];
    }

    public function messages()
    {
        return [
            'groups.regex' => trans('schedule::schedule.validation.regex'),
            'expression.cron' => trans('schedule::schedule.validation.cron'),
            'environments.regex' => trans('schedule::schedule.validation.regex'),
        ];
    }

    protected function prepareForValidation(): void
    {
        $fields = [
            'params' => [],
            'options' => [],
            'sendmail_success' => false,
            'sendmail_error' => false,
            'log_success' => false,
            'log_error' => false,
            'even_in_maintenance_mode' => false,
            'without_overlapping' => false,
            'on_one_server' => false,
            'run_in_background' => false,
        ];
        foreach ($fields as $field => $defaultValue) {
            $this->merge([$field => $this->input($field) ?? $defaultValue]);
        }
    }
}
