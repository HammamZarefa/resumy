<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 29,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 30,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 31,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 32,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 33,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 34,
                'title' => 'currency_create',
            ],
            [
                'id'    => 35,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 36,
                'title' => 'currency_show',
            ],
            [
                'id'    => 37,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 38,
                'title' => 'currency_access',
            ],
            [
                'id'    => 39,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 40,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 41,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 42,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 43,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 44,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 45,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 46,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 47,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 48,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 49,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 50,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 51,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 52,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 53,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 54,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 55,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 56,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 57,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 58,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 59,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 60,
                'title' => 'client_create',
            ],
            [
                'id'    => 61,
                'title' => 'client_edit',
            ],
            [
                'id'    => 62,
                'title' => 'client_show',
            ],
            [
                'id'    => 63,
                'title' => 'client_delete',
            ],
            [
                'id'    => 64,
                'title' => 'client_access',
            ],
            [
                'id'    => 65,
                'title' => 'project_create',
            ],
            [
                'id'    => 66,
                'title' => 'project_edit',
            ],
            [
                'id'    => 67,
                'title' => 'project_show',
            ],
            [
                'id'    => 68,
                'title' => 'project_delete',
            ],
            [
                'id'    => 69,
                'title' => 'project_access',
            ],
            [
                'id'    => 70,
                'title' => 'note_create',
            ],
            [
                'id'    => 71,
                'title' => 'note_edit',
            ],
            [
                'id'    => 72,
                'title' => 'note_show',
            ],
            [
                'id'    => 73,
                'title' => 'note_delete',
            ],
            [
                'id'    => 74,
                'title' => 'note_access',
            ],
            [
                'id'    => 75,
                'title' => 'document_create',
            ],
            [
                'id'    => 76,
                'title' => 'document_edit',
            ],
            [
                'id'    => 77,
                'title' => 'document_show',
            ],
            [
                'id'    => 78,
                'title' => 'document_delete',
            ],
            [
                'id'    => 79,
                'title' => 'document_access',
            ],
            [
                'id'    => 80,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 81,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 82,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 83,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 84,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 85,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 86,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 87,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 88,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 89,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 90,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 91,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 92,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 93,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 94,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 95,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 96,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 97,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 98,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 99,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 100,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 101,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 102,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 103,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 104,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 105,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 106,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 107,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 108,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 109,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 110,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 111,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 112,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 113,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 114,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 115,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 116,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 117,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 118,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 119,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 120,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 121,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 122,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 123,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 124,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 125,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 126,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 127,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 128,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 129,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 130,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 131,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 132,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 133,
                'title' => 'task_create',
            ],
            [
                'id'    => 134,
                'title' => 'task_edit',
            ],
            [
                'id'    => 135,
                'title' => 'task_show',
            ],
            [
                'id'    => 136,
                'title' => 'task_delete',
            ],
            [
                'id'    => 137,
                'title' => 'task_access',
            ],
            [
                'id'    => 138,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 139,
                'title' => 'team_create',
            ],
            [
                'id'    => 140,
                'title' => 'team_edit',
            ],
            [
                'id'    => 141,
                'title' => 'team_show',
            ],
            [
                'id'    => 142,
                'title' => 'team_delete',
            ],
            [
                'id'    => 143,
                'title' => 'team_access',
            ],
            [
                'id'    => 144,
                'title' => 'project_category_create',
            ],
            [
                'id'    => 145,
                'title' => 'project_category_edit',
            ],
            [
                'id'    => 146,
                'title' => 'project_category_show',
            ],
            [
                'id'    => 147,
                'title' => 'project_category_delete',
            ],
            [
                'id'    => 148,
                'title' => 'project_category_access',
            ],
            [
                'id'    => 149,
                'title' => 'service_create',
            ],
            [
                'id'    => 150,
                'title' => 'service_edit',
            ],
            [
                'id'    => 151,
                'title' => 'service_show',
            ],
            [
                'id'    => 152,
                'title' => 'service_delete',
            ],
            [
                'id'    => 153,
                'title' => 'service_access',
            ],
            [
                'id'    => 154,
                'title' => 'testimonial_create',
            ],
            [
                'id'    => 155,
                'title' => 'testimonial_edit',
            ],
            [
                'id'    => 156,
                'title' => 'testimonial_show',
            ],
            [
                'id'    => 157,
                'title' => 'testimonial_delete',
            ],
            [
                'id'    => 158,
                'title' => 'testimonial_access',
            ],
            [
                'id'    => 159,
                'title' => 'extension_create',
            ],
            [
                'id'    => 160,
                'title' => 'extension_edit',
            ],
            [
                'id'    => 161,
                'title' => 'extension_show',
            ],
            [
                'id'    => 162,
                'title' => 'extension_delete',
            ],
            [
                'id'    => 163,
                'title' => 'extension_access',
            ],
            [
                'id'    => 164,
                'title' => 'frontend_create',
            ],
            [
                'id'    => 165,
                'title' => 'frontend_edit',
            ],
            [
                'id'    => 166,
                'title' => 'frontend_show',
            ],
            [
                'id'    => 167,
                'title' => 'frontend_delete',
            ],
            [
                'id'    => 168,
                'title' => 'frontend_access',
            ],
            [
                'id'    => 169,
                'title' => 'general_setting_create',
            ],
            [
                'id'    => 170,
                'title' => 'general_setting_edit',
            ],
            [
                'id'    => 171,
                'title' => 'general_setting_show',
            ],
            [
                'id'    => 172,
                'title' => 'general_setting_delete',
            ],
            [
                'id'    => 173,
                'title' => 'general_setting_access',
            ],
            [
                'id'    => 174,
                'title' => 'subscriper_create',
            ],
            [
                'id'    => 175,
                'title' => 'subscriper_edit',
            ],
            [
                'id'    => 176,
                'title' => 'subscriper_show',
            ],
            [
                'id'    => 177,
                'title' => 'subscriper_delete',
            ],
            [
                'id'    => 178,
                'title' => 'subscriper_access',
            ],
            [
                'id'    => 179,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
