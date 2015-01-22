<?php

namespace CShort\MantisIssue;

/**
 * Contains all client objects for the MantisConnect
 * service.
 *
 * PHP version 5
 *
 * @package    MantisConnect
 * @category   WebServices
 */
class ObjectRef
{
    public $id; // integer
    public $name; // string
}

class AccountData
{
    public $id; // integer
    public $name; // string
    public $real_name; // string
    public $email; // string
}

class UserData
{
    public $account_data; // AccountData
    public $access_level; // integer
    public $timezone; // string
}

class AttachmentData
{
    public $id; // integer
    public $filename; // string
    public $size; // integer
    public $content_type; // string
    public $date_submitted; // dateTime
    public $download_url; // anyURI
    public $user_id; // integer
}

class ProjectAttachmentData
{
    public $id; // integer
    public $filename; // string
    public $title; // string
    public $description; // string
    public $size; // integer
    public $content_type; // string
    public $date_submitted; // dateTime
    public $download_url; // anyURI
    public $user_id; // integer
}

class RelationshipData
{
    public $id; // integer
    public $type; // ObjectRef
    public $target_id; // integer
}

class IssueNoteData
{
    public $id; // integer
    public $reporter; // AccountData
    public $text; // string
    public $view_state; // ObjectRef
    public $date_submitted; // dateTime
    public $last_modified; // dateTime
    public $time_tracking; // integer
    public $note_type; // integer
    public $note_attr; // string
}

class IssueData
{
    public $id; // integer
    public $view_state; // ObjectRef
    public $last_updated; // dateTime
    public $project; // ObjectRef
    public $category; // string
    public $priority; // ObjectRef
    public $severity; // ObjectRef
    public $status; // ObjectRef
    public $reporter; // AccountData
    public $summary; // string
    public $version; // string
    public $build; // string
    public $platform; // string
    public $os; // string
    public $os_build; // string
    public $reproducibility; // ObjectRef
    public $date_submitted; // dateTime
    public $sponsorship_total; // integer
    public $handler; // AccountData
    public $projection; // ObjectRef
    public $eta; // ObjectRef
    public $resolution; // ObjectRef
    public $fixed_in_version; // string
    public $target_version; // string
    public $description; // string
    public $steps_to_reproduce; // string
    public $additional_information; // string
    public $attachments; // AttachmentDataArray
    public $relationships; // RelationshipDataArray
    public $notes; // IssueNoteDataArray
    public $custom_fields; // CustomFieldValueForIssueDataArray
    public $due_date; // dateTime
    public $monitors; // AccountDataArray
    public $sticky; // boolean
    public $tags; // ObjectRefArray
}

class HistoryData
{
    public $date; // integer
    public $userid; // integer
    public $username; // string
    public $field; // string
    public $type; // integer
    public $old_value; // string
    public $new_value; // string
}

class IssueHeaderData
{
    public $id; // integer
    public $view_state; // integer
    public $last_updated; // dateTime
    public $project; // integer
    public $category; // string
    public $priority; // integer
    public $severity; // integer
    public $status; // integer
    public $reporter; // integer
    public $summary; // string
    public $handler; // integer
    public $resolution; // integer
    public $attachments_count; // integer
    public $notes_count; // integer
}

class ProjectData
{
    public $id; // integer
    public $name; // string
    public $status; // ObjectRef
    public $enabled; // boolean
    public $view_state; // ObjectRef
    public $access_min; // ObjectRef
    public $file_path; // string
    public $description; // string
    public $subprojects; // ProjectDataArray
    public $inherit_global; // boolean
}

class ProjectVersionData
{
    public $id; // integer
    public $name; // string
    public $project_id; // integer
    public $date_order; // dateTime
    public $description; // string
    public $released; // boolean
    public $obsolete; // boolean
}

class FilterData
{
    public $id; // integer
    public $owner; // AccountData
    public $project_id; // integer
    public $is_public; // boolean
    public $name; // string
    public $filter_string; // string
    public $url; // string
}

class CustomFieldDefinitionData
{
    public $field; // ObjectRef
    public $type; // integer
    public $possible_values; // string
    public $default_value; // string
    public $valid_regexp; // string
    public $access_level_r; // integer
    public $access_level_rw; // integer
    public $length_min; // integer
    public $length_max; // integer
    public $advanced; // boolean
    public $display_report; // boolean
    public $display_update; // boolean
    public $display_resolved; // boolean
    public $display_closed; // boolean
    public $require_report; // boolean
    public $require_update; // boolean
    public $require_resolved; // boolean
    public $require_closed; // boolean
}

class CustomFieldLinkForProjectData
{
    public $field; // ObjectRef
    public $sequence; // byte
}

class CustomFieldValueForIssueData
{
    public $field; // ObjectRef
    public $value; // string
}

class TagData
{
    public $id; // integer
    public $user_id; // AccountData
    public $name; // string
    public $description; // string
    public $date_created; // dateTime
    public $date_updated; // dateTime
}

class TagDataSearchResult
{
    public $results; // TagDataArray
    public $total_results; // integer
}

class ProfileData
{
    public $id; // integer
    public $user_id; // AccountData
    public $platform; // string
    public $os; // string
    public $os_build; // string
    public $description; // string
}

class ProfileDataSearchResult
{
    public $results; // ProfileDataArray
    public $total_results; // integer
}


/**
 * MantisConnect class
 */
class MantisConnect extends \SoapClient
{

    private $wsdl;

    private static $classmap = array(
        'ObjectRef' => 'ObjectRef',
        'AccountData' => 'AccountData',
        'UserData' => 'UserData',
        'AttachmentData' => 'AttachmentData',
        'ProjectAttachmentData' => 'ProjectAttachmentData',
        'RelationshipData' => 'RelationshipData',
        'IssueNoteData' => 'IssueNoteData',
        'IssueData' => 'IssueData',
        'HistoryData' => 'HistoryData',
        'IssueHeaderData' => 'IssueHeaderData',
        'ProjectData' => 'ProjectData',
        'ProjectVersionData' => 'ProjectVersionData',
        'FilterData' => 'FilterData',
        'CustomFieldDefinitionData' => 'CustomFieldDefinitionData',
        'CustomFieldLinkForProjectData' => 'CustomFieldLinkForProjectData',
        'CustomFieldValueForIssueData' => 'CustomFieldValueForIssueData',
        'TagData' => 'TagData',
        'TagDataSearchResult' => 'TagDataSearchResult',
        'ProfileData' => 'ProfileData',
        'ProfileDataSearchResult' => 'ProfileDataSearchResult',
    );

    public function __construct($wsdl, $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        parent::__construct($wsdl, $options);
        $this->wsdl = $wsdl;
    }

    public function _checkArguments($arguments, $validParam)
    {
        $variables = "";
        foreach ($arguments as $arg) {
            $type = gettype($arg);
            if ($type == "object") {
                $type = get_class($arg);
            }
            $variables .= "(" . $type . ")";
        }
        if (!in_array($variables, $validParam)) {
            throw new Exception("Invalid paremeter types: " . str_replace(")(", ", ", $variables));
        }

        return true;
    }

    /**
     * @param
     * @return string
     */
    public function mc_version()
    {
        return $this->__soapCall(
            'mc_version',
            array()
        );
    }

    /**
     * Log the user in and get their information.
     *
     * @param string $username
     * @param string $password
     * @return UserData
     */
    public function mc_login($username, $password)
    {
        return $this->__soapCall(
            'mc_login',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for statuses.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_status($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_status',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for priorities.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_priorities($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_priorities',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for severities.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_severities($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_severities',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for reproducibilities.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_reproducibilities($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_reproducibilities',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for projections.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_projections($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_projections',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for ETAs.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_etas($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_etas',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for resolutions.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_resolutions($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_resolutions',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for access levels.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_access_levels($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_access_levels',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for project statuses.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_project_status($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_project_status',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for project view states.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_project_view_states($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_project_view_states',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for view states.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_view_states($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_view_states',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for custom field types.
     *
     * @param string $username
     * @param string $password
     * @return ObjectRefArray
     */
    public function mc_enum_custom_field_types($username, $password)
    {
        return $this->__soapCall(
            'mc_enum_custom_field_types',
            array($username, $password)
        );
    }

    /**
     * Get the enumeration for the specified enumeration type.
     *
     * @param string $username
     * @param string $password
     * @param string $enumeration
     * @return string
     */
    public function mc_enum_get($username, $password, $enumeration)
    {
        return $this->__soapCall(
            'mc_enum_get',
            array($username, $password, $enumeration)
        );
    }

    /**
     * Check there exists an issue with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @return boolean
     */
    public function mc_issue_exists($username, $password, integer $issue_id)
    {
        return $this->__soapCall(
            'mc_issue_exists',
            array($username, $password, $issue_id)
        );
    }

    /**
     * Get the issue with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @return IssueData
     */
    public function mc_issue_get($username, $password, integer $issue_id)
    {
        return $this->__soapCall(
            'mc_issue_get',
            array($username, $password, $issue_id)
        );
    }

    /**
     * Get the history of the issue with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @return HistoryDataArray
     */
    public function mc_issue_get_history($username, $password, integer $issue_id)
    {
        return $this->__soapCall(
            'mc_issue_get_history',
            array($username, $password, $issue_id)
        );
    }

    /**
     * Get the latest submitted issue in the specified project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return integer
     */
    public function mc_issue_get_biggest_id($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_issue_get_biggest_id',
            array($username, $password, $project_id)
        );
    }

    /**
     * Get the id of the issue with the specified summary.
     *
     * @param string $username
     * @param string $password
     * @param string $summary
     * @return integer
     */
    public function mc_issue_get_id_from_summary($username, $password, $summary)
    {
        return $this->__soapCall(
            'mc_issue_get_id_from_summary',
            array($username, $password, $summary)
        );
    }

    /**
     * Submit the specified issue details.
     *
     * @param string $username
     * @param string $password
     * @param IssueData $issue
     * @return integer
     */
    public function mc_issue_add($username, $password, IssueData $issue)
    {
        return $this->__soapCall(
            'mc_issue_add',
            array($username, $password, $issue)
        );
    }

    /**
     * Update Issue method.
     *
     * @param string $username
     * @param string $password
     * @param integer $issueId
     * @param IssueData $issue
     * @return boolean
     */
    public function mc_issue_update($username, $password, integer $issueId, IssueData $issue)
    {
        return $this->__soapCall(
            'mc_issue_update',
            array($username, $password, $issueId, $issue)
        );
    }

    /**
     * Sets the tags for a specified issue.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @param TagDataArray $tags
     * @return boolean
     */
    public function mc_issue_set_tags($username, $password, integer $issue_id, TagDataArray $tags)
    {
        return $this->__soapCall(
            'mc_issue_set_tags',
            array($username, $password, $issue_id, $tags)
        );
    }

    /**
     * Delete the issue with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @return boolean
     */
    public function mc_issue_delete($username, $password, integer $issue_id)
    {
        return $this->__soapCall(
            'mc_issue_delete',
            array($username, $password, $issue_id)
        );
    }

    /**
     * Submit a new note.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @param IssueNoteData $note
     * @return integer
     */
    public function mc_issue_note_add($username, $password, integer $issue_id, IssueNoteData $note)
    {
        return $this->__soapCall(
            'mc_issue_note_add',
            array($username, $password, $issue_id, $note)
        );
    }

    /**
     * Delete the note with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_note_id
     * @return boolean
     */
    public function mc_issue_note_delete($username, $password, integer $issue_note_id)
    {
        return $this->__soapCall(
            'mc_issue_note_delete',
            array($username, $password, $issue_note_id)
        );
    }

    /**
     * Update a specific note of a specific issue.
     *
     * @param string $username
     * @param string $password
     * @param IssueNoteData $note
     * @return boolean
     */
    public function mc_issue_note_update($username, $password, IssueNoteData $note)
    {
        return $this->__soapCall(
            'mc_issue_note_update',
            array($username, $password, $note)
        );
    }

    /**
     * Submit a new relationship.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @param RelationshipData $relationship
     * @return integer
     */
    public function mc_issue_relationship_add($username, $password, integer $issue_id, RelationshipData $relationship)
    {
        return $this->__soapCall(
            'mc_issue_relationship_add',
            array($username, $password, $issue_id, $relationship)
        );
    }

    /**
     * Delete the relationship for the specified issue.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @param integer $relationship_id
     * @return boolean
     */
    public function mc_issue_relationship_delete($username, $password, integer $issue_id, integer $relationship_id)
    {
        return $this->__soapCall(
            'mc_issue_relationship_delete',
            array($username, $password, $issue_id, $relationship_id)
        );
    }

    /**
     * Submit a new issue attachment.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @param string $name
     * @param string $file_type
     * @param base64Binary $content
     * @return integer
     */
    public function mc_issue_attachment_add($username, $password, integer $issue_id, $name, $file_type, $content)
    {
        return $this->__soapCall(
            'mc_issue_attachment_add',
            array($username, $password, $issue_id, $name, $file_type, $content)
        );
    }

    /**
     * Delete the issue attachment with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_attachment_id
     * @return boolean
     */
    public function mc_issue_attachment_delete($username, $password, integer $issue_attachment_id)
    {
        return $this->__soapCall(
            'mc_issue_attachment_delete',
            array($username, $password, $issue_attachment_id)
        );
    }

    /**
     * Get the data for the specified issue attachment.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_attachment_id
     * @return base64Binary
     */
    public function mc_issue_attachment_get($username, $password, integer $issue_attachment_id)
    {
        return $this->__soapCall(
            'mc_issue_attachment_get',
            array($username, $password, $issue_attachment_id)
        );
    }

    /**
     * Add a new project to the tracker (must have admin privileges)
     *
     * @param string $username
     * @param string $password
     * @param ProjectData $project
     * @return integer
     */
    public function mc_project_add($username, $password, ProjectData $project)
    {
        return $this->__soapCall(
            'mc_project_add',
            array($username, $password, $project)
        );
    }

    /**
     * Add a new project to the tracker (must have admin privileges)
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return boolean
     */
    public function mc_project_delete($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_project_delete',
            array($username, $password, $project_id)
        );
    }

    /**
     * Update a specific project to the tracker (must have admin privileges)
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param ProjectData $project
     * @return boolean
     */
    public function mc_project_update($username, $password, integer $project_id, ProjectData $project)
    {
        return $this->__soapCall(
            'mc_project_update',
            array($username, $password, $project_id, $project)
        );
    }

    /**
     * Get the id of the project with the specified name.
     *
     * @param string $username
     * @param string $password
     * @param string $project_name
     * @return integer
     */
    public function mc_project_get_id_from_name($username, $password, $project_name)
    {
        return $this->__soapCall(
            'mc_project_get_id_from_name',
            array($username, $password, $project_name)
        );
    }

    /**
     * Get the issues filtered by the specified user within the specified project. Supported
     * types include "assigned", "monitored", "reported".  Pass "-1" for the per_page parameter
     * to get all issues.  Use project id "0" for all projects.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param string $filter_type
     * @param AccountData $target_user
     * @param integer $page_number
     * @param integer $per_page
     * @return IssueDataArray
     */
    public function mc_project_get_issues_for_user(
        $username,
        $password,
        integer $project_id,
        $filter_type,
        AccountData $target_user,
        integer $page_number,
        integer $per_page
    ) {
        return $this->__soapCall(
            'mc_project_get_issues_for_user',
            array($username, $password, $project_id, $filter_type, $target_user, $page_number, $per_page)
        );
    }

    /**
     * Get the issues that match the specified project id and paging details. Pass "-1" for the
     * per_page parameter to get all issues.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param integer $page_number
     * @param integer $per_page
     * @return IssueDataArray
     */
    public function mc_project_get_issues(
        $username,
        $password,
        integer $project_id,
        integer $page_number,
        integer $per_page
    ) {
        return $this->__soapCall(
            'mc_project_get_issues',
            array($username, $password, $project_id, $page_number, $per_page)
        );
    }

    /**
     * Get the issue headers that match the specified project id and paging details. Pass "-1"
     * for the per_page parameter to get all issues.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param integer $page_number
     * @param integer $per_page
     * @return IssueHeaderDataArray
     */
    public function mc_project_get_issue_headers(
        $username,
        $password,
        integer $project_id,
        integer $page_number,
        integer $per_page
    ) {
        return $this->__soapCall(
            'mc_project_get_issue_headers',
            array($username, $password, $project_id, $page_number, $per_page)
        );
    }

    /**
     * Get appropriate users assigned to a project by access level.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param integer $access
     * @return AccountDataArray
     */
    public function mc_project_get_users($username, $password, integer $project_id, integer $access)
    {
        return $this->__soapCall(
            'mc_project_get_users',
            array($username, $password, $project_id, $access)
        );
    }

    /**
     * Get the list of projects that are accessible to the logged in user.
     *
     * @param string $username
     * @param string $password
     * @return ProjectDataArray
     */
    public function mc_projects_get_user_accessible($username, $password)
    {
        return $this->__soapCall(
            'mc_projects_get_user_accessible',
            array($username, $password)
        );
    }

    /**
     * Get the categories belonging to the specified project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return StringArray
     */
    public function mc_project_get_categories($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_project_get_categories',
            array($username, $password, $project_id)
        );
    }

    /**
     * Add a category of specific project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param string $p_category_name
     * @return integer
     */
    public function mc_project_add_category($username, $password, integer $project_id, $p_category_name)
    {
        return $this->__soapCall(
            'mc_project_add_category',
            array($username, $password, $project_id, $p_category_name)
        );
    }

    /**
     * Delete a category of specific project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param string $p_category_name
     * @return integer
     */
    public function mc_project_delete_category($username, $password, integer $project_id, $p_category_name)
    {
        return $this->__soapCall(
            'mc_project_delete_category',
            array($username, $password, $project_id, $p_category_name)
        );
    }

    /**
     * Rename a category of specific project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param string $p_category_name
     * @param string $p_category_name_new
     * @param integer $p_assigned_to
     * @return integer
     */
    public function mc_project_rename_category_by_name(
        $username,
        $password,
        integer $project_id,
        $p_category_name,
        $p_category_name_new,
        integer $p_assigned_to
    ) {
        return $this->__soapCall(
            'mc_project_rename_category_by_name',
            array($username, $password, $project_id, $p_category_name, $p_category_name_new, $p_assigned_to)
        );
    }

    /**
     * Get the versions belonging to the specified project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return ProjectVersionDataArray
     */
    public function mc_project_get_versions($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_project_get_versions',
            array($username, $password, $project_id)
        );
    }

    /**
     * Submit the specified version details.
     *
     * @param string $username
     * @param string $password
     * @param ProjectVersionData $version
     * @return integer
     */
    public function mc_project_version_add($username, $password, ProjectVersionData $version)
    {
        return $this->__soapCall(
            'mc_project_version_add',
            array($username, $password, $version)
        );
    }

    /**
     * Update version method.
     *
     * @param string $username
     * @param string $password
     * @param integer $version_id
     * @param ProjectVersionData $version
     * @return boolean
     */
    public function mc_project_version_update($username, $password, integer $version_id, ProjectVersionData $version)
    {
        return $this->__soapCall(
            'mc_project_version_update',
            array($username, $password, $version_id, $version)
        );
    }

    /**
     * Delete the version with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $version_id
     * @return boolean
     */
    public function mc_project_version_delete($username, $password, integer $version_id)
    {
        return $this->__soapCall(
            'mc_project_version_delete',
            array($username, $password, $version_id)
        );
    }

    /**
     * Get the released versions that belong to the specified project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return ProjectVersionDataArray
     */
    public function mc_project_get_released_versions($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_project_get_released_versions',
            array($username, $password, $project_id)
        );
    }

    /**
     * Get the unreleased version that belong to the specified project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return ProjectVersionDataArray
     */
    public function mc_project_get_unreleased_versions($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_project_get_unreleased_versions',
            array($username, $password, $project_id)
        );
    }

    /**
     * Get the attachments that belong to the specified project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return ProjectAttachmentDataArray
     */
    public function mc_project_get_attachments($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_project_get_attachments',
            array($username, $password, $project_id)
        );
    }

    /**
     * Get the custom fields that belong to the specified project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return CustomFieldDefinitionDataArray
     */
    public function mc_project_get_custom_fields($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_project_get_custom_fields',
            array($username, $password, $project_id)
        );
    }

    /**
     * Get the data for the specified project attachment.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_attachment_id
     * @return base64Binary
     */
    public function mc_project_attachment_get($username, $password, integer $project_attachment_id)
    {
        return $this->__soapCall(
            'mc_project_attachment_get',
            array($username, $password, $project_attachment_id)
        );
    }

    /**
     * Submit a new project attachment.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param string $name
     * @param string $title
     * @param string $description
     * @param string $file_type
     * @param base64Binary $content
     * @return integer
     */
    public function mc_project_attachment_add(
        $username,
        $password,
        integer $project_id,
        $name,
        $title,
        $description,
        $file_type,
        $content
    ) {
        return $this->__soapCall(
            'mc_project_attachment_add',
            array($username, $password, $project_id, $name, $title, $description, $file_type, $content)
        );
    }

    /**
     * Delete the project attachment with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_attachment_id
     * @return boolean
     */
    public function mc_project_attachment_delete($username, $password, integer $project_attachment_id)
    {
        return $this->__soapCall(
            'mc_project_attachment_delete',
            array($username, $password, $project_attachment_id)
        );
    }

    /**
     * Get the subprojects ID of a specific project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return StringArray
     */
    public function mc_project_get_all_subprojects($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_project_get_all_subprojects',
            array($username, $password, $project_id)
        );
    }

    /**
     * Get the filters defined for the specified project.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @return FilterDataArray
     */
    public function mc_filter_get($username, $password, integer $project_id)
    {
        return $this->__soapCall(
            'mc_filter_get',
            array($username, $password, $project_id)
        );
    }

    /**
     * Get the issues that match the specified filter and paging details. Pass "-1" for the per_page
     * parameter to get all issues.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param integer $filter_id
     * @param integer $page_number
     * @param integer $per_page
     * @return IssueDataArray
     */
    public function mc_filter_get_issues(
        $username,
        $password,
        integer $project_id,
        integer $filter_id,
        integer $page_number,
        integer $per_page
    ) {
        return $this->__soapCall(
            'mc_filter_get_issues',
            array($username, $password, $project_id, $filter_id, $page_number, $per_page)
        );
    }

    /**
     * Get the issue headers that match the specified filter and paging details.  Pass "-1" for
     * the per_page parameter to get all issues.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param integer $filter_id
     * @param integer $page_number
     * @param integer $per_page
     * @return IssueHeaderDataArray
     */
    public function mc_filter_get_issue_headers(
        $username,
        $password,
        integer $project_id,
        integer $filter_id,
        integer $page_number,
        integer $per_page
    ) {
        return $this->__soapCall(
            'mc_filter_get_issue_headers',
            array($username, $password, $project_id, $filter_id, $page_number, $per_page)
        );
    }

    /**
     * Get the value for the specified configuration variable.
     *
     * @param string $username
     * @param string $password
     * @param string $config_var
     * @return string
     */
    public function mc_config_get_string($username, $password, $config_var)
    {
        return $this->__soapCall(
            'mc_config_get_string',
            array($username, $password, $config_var)
        );
    }

    /**
     * Notifies MantisBT of a check-in for the issue with the specified id.
     *
     * @param string $username
     * @param string $password
     * @param integer $issue_id
     * @param string $comment
     * @param boolean $fixed
     * @return boolean
     */
    public function mc_issue_checkin($username, $password, integer $issue_id, $comment, $fixed)
    {
        return $this->__soapCall(
            'mc_issue_checkin',
            array($username, $password, $issue_id, $comment, $fixed)
        );
    }

    /**
     * Get the value for the specified user preference.
     *
     * @param string $username
     * @param string $password
     * @param integer $project_id
     * @param string $pref_name
     * @return string
     */
    public function mc_user_pref_get_pref($username, $password, integer $project_id, $pref_name)
    {
        return $this->__soapCall(
            'mc_user_pref_get_pref',
            array($username, $password, $project_id, $pref_name)
        );
    }

    /**
     * Get profiles available to the current user.
     *
     * @param string $username
     * @param string $password
     * @param integer $page_number
     * @param integer $per_page
     * @return ProfileDataSearchResult
     */
    public function mc_user_profiles_get_all($username, $password, integer $page_number, integer $per_page)
    {
        return $this->__soapCall(
            'mc_user_profiles_get_all',
            array($username, $password, $page_number, $per_page)
        );
    }

    /**
     * Gets all the tags.
     *
     * @param string $username
     * @param string $password
     * @param integer $page_number
     * @param integer $per_page
     * @return TagDataSearchResult
     */
    public function mc_tag_get_all($username, $password, integer $page_number, integer $per_page)
    {
        return $this->__soapCall(
            'mc_tag_get_all',
            array($username, $password, $page_number, $per_page)
        );
    }

    /**
     * Creates a tag.
     *
     * @param string $username
     * @param string $password
     * @param TagData $tag
     * @return integer
     */
    public function mc_tag_add($username, $password, TagData $tag)
    {
        return $this->__soapCall(
            'mc_tag_add',
            array($username, $password, $tag)
        );
    }

    /**
     * Deletes a tag.
     *
     * @param string $username
     * @param string $password
     * @param integer $tag_id
     * @return boolean
     */
    public function mc_tag_delete($username, $password, integer $tag_id)
    {
        return $this->__soapCall(
            'mc_tag_delete',
            array($username, $password, $tag_id)
        );
    }

}

?>
