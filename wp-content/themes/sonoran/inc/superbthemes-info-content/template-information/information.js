jQuery(document).ready(function(t){function o(t){const e=t.find(".components-item.block-editor-inserter__patterns-category");!e.length||(e.off("click.superbthemes-information-watcher"),e.on("click.superbthemes-information-watcher",function(){r(".block-editor-inserter__patterns-category-dialog")}))}function i(t){const e=t.find(".components-button.block-editor-inserter__patterns-explore-button");!e.length||(e.off("click.superbthemes-information-watcher"),e.on("click.superbthemes-information-watcher",function(){r(".block-editor-block-patterns-explorer__sidebar")}))}function r(e){setTimeout(function(){const t=jQuery(e);t.length&&!t.find(".superbthemes-js-information-wrapper").length&&t.children().last().after(a)},100)}const e=jQuery("#editor");const n=jQuery("#site-editor");const s=n.length>0&&e.length===0;const c=s?n:e;const a=jQuery("#tmpl-superbthemes-js-information-wrapper").text();window.wp.data.subscribe(function(){setTimeout(function(){if(s){const e=c.find(".edit-site-header-edit-mode__inserter-toggle");if(!e.length)return;e.off("click.superbthemes-information-watcher"),e.on("click.superbthemes-information-watcher",function(){jQuery(this).hasClass("is-pressed")||setTimeout(()=>{r(".block-editor-inserter__patterns-category-dialog"),o(c),i(c)},1)})}const t=c.find(".block-editor-inserter__tabs");if(t.length){const n=t.find(".components-button.components-tab-panel__tabs-item");!n.length||(r(".block-editor-inserter__tips"),n.off("click.superbthemes-information-watcher"),n.on("click.superbthemes-information-watcher",function(){setTimeout(()=>{r(".block-editor-inserter__patterns-category-dialog"),r(".block-editor-inserter__tips"),o(t),i(t)},1)}))}},1)})});