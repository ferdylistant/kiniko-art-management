import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { glob } from 'glob';

/**
 * Get Files from a directory
 * @param {string} query
 * @returns array
 */
function GetFilesArray(query) {
    return glob.sync(query);
}
// Page Files
const pageJsFiles = GetFilesArray('resources/js/pages/*.js');
const pageCssFiles = GetFilesArray('resources/css/pages/*.css');

// Processing Vendor Files
const vendorJsFiles = GetFilesArray('resources/js/vendor/*.js');
const vendorCssFiles = GetFilesArray('resources/css/vendor/*.css');

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                ...pageJsFiles,
                ...pageCssFiles,
                ...vendorJsFiles,
                ...vendorCssFiles
            ],
            refresh: true,
        }),
    ],
});
