<td colspan="17">
  <?php echo __('%%id%% - %%category_id%% - %%type%% - %%company%% - %%logo%% - %%url%% - %%position%% - %%location%% - %%description%% - %%how_to_apply%% - %%token%% - %%is_public%% - %%is_activated%% - %%email%% - %%expires_at%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($jobeet_job->getId(), 'jobeet_job_edit', $jobeet_job), '%%category_id%%' => $jobeet_job->getCategoryId(), '%%type%%' => $jobeet_job->getType(), '%%company%%' => $jobeet_job->getCompany(), '%%logo%%' => $jobeet_job->getLogo(), '%%url%%' => $jobeet_job->getUrl(), '%%position%%' => $jobeet_job->getPosition(), '%%location%%' => $jobeet_job->getLocation(), '%%description%%' => $jobeet_job->getDescription(), '%%how_to_apply%%' => $jobeet_job->getHowToApply(), '%%token%%' => $jobeet_job->getToken(), '%%is_public%%' => $jobeet_job->getIsPublic(), '%%is_activated%%' => $jobeet_job->getIsActivated(), '%%email%%' => $jobeet_job->getEmail(), '%%expires_at%%' => false !== strtotime($jobeet_job->getExpiresAt()) ? format_date($jobeet_job->getExpiresAt(), "f") : '&nbsp;', '%%created_at%%' => false !== strtotime($jobeet_job->getCreatedAt()) ? format_date($jobeet_job->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($jobeet_job->getUpdatedAt()) ? format_date($jobeet_job->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>