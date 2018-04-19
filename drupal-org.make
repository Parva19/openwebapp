core = 8.x
api = 2
projects:
  bootstrap:
    version: '3.11'
  content_default:
    type: module
    custom_download: true
  default_content:
    type: module
    'download][type': git
    'download][url': 'https://git.drupal.org/project/default_content.git'
    'download][branch': 8.x-1.x
    'download][revision': 13f97c93eeaf4da9f84cc3fdcc0c91d32284132c
  page_manager:
    type: module
    'download][type': git
    'download][url': 'https://git.drupal.org/project/page_manager.git'
    'download][branch': 8.x-4.x
    'download][revision': 0ad88858840cc99c8adef63e577c0f989bc3ab2c
  openwebapp1:
    type: theme
    custom_download: true
