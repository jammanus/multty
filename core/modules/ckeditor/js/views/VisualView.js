/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal, Backbone, $, Sortable) {
  Drupal.ckeditor.VisualView = Backbone.View.extend({
    events: {
      'click .ckeditor-toolbar-group-name': 'onGroupNameClick',
      'click .ckeditor-groupnames-toggle': 'onGroupNamesToggleClick',
      'click .ckeditor-add-new-group button': 'onAddGroupButtonClick'
    },
    initialize: function initialize() {
      this.listenTo(this.model, 'change:isDirty change:groupNamesVisible', this.render);
      $(Drupal.theme('ckeditorButtonGroupNamesToggle')).prependTo(this.$el.find('#ckeditor-active-toolbar').parent());
      this.render();
    },
    render: function render(model, value, changedAttributes) {
      this.insertPlaceholders();
      this.applySorting();
      var groupNamesVisible = this.model.get('groupNamesVisible');

      if (changedAttributes && changedAttributes.changes && changedAttributes.changes.isDirty) {
        this.model.set({
          groupNamesVisible: true
        }, {
          silent: true
        });
        groupNamesVisible = true;
      }

      this.$el.find('[data-toolbar="active"]').toggleClass('ckeditor-group-names-are-visible', groupNamesVisible);
      this.$el.find('.ckeditor-groupnames-toggle').text(groupNamesVisible ? Drupal.t('Hide group names') : Drupal.t('Show group names')).attr('aria-pressed', groupNamesVisible);
      return this;
    },
    onGroupNameClick: function onGroupNameClick(event) {
      var $group = $(event.currentTarget).closest('.ckeditor-toolbar-group');
      Drupal.ckeditor.openGroupNameDialog(this, $group);
      event.stopPropagation();
      event.preventDefault();
    },
    onGroupNamesToggleClick: function onGroupNamesToggleClick(event) {
      this.model.set('groupNamesVisible', !this.model.get('groupNamesVisible'));
      event.preventDefault();
    },
    onAddGroupButtonClick: function onAddGroupButtonClick(event) {
      function insertNewGroup(success, $group) {
        if (success) {
          $group.appendTo($(event.currentTarget).closest('.ckeditor-row').children('.ckeditor-toolbar-groups'));
          $group.trigger('focus');
        }
      }

      Drupal.ckeditor.openGroupNameDialog(this, $(Drupal.theme('ckeditorToolbarGroup')), insertNewGroup);
      event.preventDefault();
    },
    endGroupDrag: function endGroupDrag(event) {
      var $item = $(event.item);
      Drupal.ckeditor.registerGroupMove(this, $item);
    },
    startButtonDrag: function startButtonDrag(event) {
      this.$el.find('a:focus').trigger('blur');
      this.model.set('groupNamesVisible', true);
    },
    endButtonDrag: function endButtonDrag(event) {
      var $item = $(event.item);
      Drupal.ckeditor.registerButtonMove(this, $item, function (success) {
        $item.find('a').trigger('focus');
      });
    },
    applySorting: function applySorting() {
      var _this = this;

      Array.prototype.forEach.call(this.el.querySelectorAll('.ckeditor-buttons:not(.js-sortable)'), function (buttons) {
        buttons.classList.add('js-sortable');
        Sortable.create(buttons, {
          ghostClass: 'ckeditor-button-placeholder',
          group: 'ckeditor-buttons',
          onStart: _this.startButtonDrag.bind(_this),
          onEnd: _this.endButtonDrag.bind(_this)
        });
      });
      Array.prototype.forEach.call(this.el.querySelectorAll('.ckeditor-toolbar-groups:not(.js-sortable)'), function (buttons) {
        buttons.classList.add('js-sortable');
        Sortable.create(buttons, {
          ghostClass: 'ckeditor-toolbar-group-placeholder',
          onEnd: _this.endGroupDrag.bind(_this)
        });
      });
      Array.prototype.forEach.call(this.el.querySelectorAll('.ckeditor-multiple-buttons:not(.js-sortable)'), function (buttons) {
        buttons.classList.add('js-sortable');
        Sortable.create(buttons, {
          group: {
            name: 'ckeditor-buttons',
            pull: 'clone'
          },
          onEnd: _this.endButtonDrag.bind(_this)
        });
      });
    },
    insertPlaceholders: function insertPlaceholders() {
      this.insertPlaceholderRow();
      this.insertNewGroupButtons();
    },
    insertPlaceholderRow: function insertPlaceholderRow() {
      var $rows = this.$el.find('.ckeditor-row');

      if (!$rows.eq(-1).hasClass('placeholder')) {
        this.$el.find('.ckeditor-toolbar-active').children('.ckeditor-active-toolbar-configuration').append(Drupal.theme('ckeditorRow'));
      }

      $rows = this.$el.find('.ckeditor-row');
      var len = $rows.length;
      $rows.filter(function (index, row) {
        if (index + 1 === len) {
          return false;
        }

        return $(row).find('.ckeditor-toolbar-group').not('.placeholder').length === 0;
      }).remove();
    },
    insertNewGroupButtons: function insertNewGroupButtons() {
      this.$el.find('.ckeditor-row').each(function () {
        var $row = $(this);
        var $groups = $row.find('.ckeditor-toolbar-group');
        var $button = $row.find('.ckeditor-add-new-group');

        if ($button.length === 0) {
          $row.children('.ckeditor-toolbar-groups').append(Drupal.theme('ckeditorNewButtonGroup'));
        } else if (!$groups.eq(-1).hasClass('ckeditor-add-new-group')) {
          $button.appendTo($row.children('.ckeditor-toolbar-groups'));
        }
      });
    }
  });
})(Drupal, Backbone, jQuery, Sortable);