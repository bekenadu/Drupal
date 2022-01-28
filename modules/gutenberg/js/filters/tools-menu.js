/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/'use strict';

(function (wp) {
  var registerPlugin = wp.plugins.registerPlugin;
  var dispatch = wp.data.dispatch;
  var _wp$components = wp.components,
      createSlotFill = _wp$components.createSlotFill,
      MenuItem = _wp$components.MenuItem;
  var __ = wp.i18n.__;

  var _createSlotFill = createSlotFill('ToolsMoreMenuGroup'),
      ToolsMoreMenuGroup = _createSlotFill.Fill;

  function toggleWelcomeGuide() {
    dispatch('core/edit-post').toggleFeature('welcomeGuideDrupalDisabled');
  }

  var DrupalToolsMenu = function DrupalToolsMenu() {
    return React.createElement(
      ToolsMoreMenuGroup,
      null,
      React.createElement(
        MenuItem,
        { role: 'menuitem', onClick: toggleWelcomeGuide },
        __('Welcome Guide')
      ),
      React.createElement(
        MenuItem,
        {
          role: 'menuitem',
          href: 'https://www.drupal.org/docs/8/modules/gutenberg',
          target: '_new'
        },
        __('Help')
      )
    );
  };

  registerPlugin('more-menu-item-test', { render: DrupalToolsMenu });
})(wp);