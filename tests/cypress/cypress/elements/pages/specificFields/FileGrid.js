import ControlPanel from '../ControlPanel'

class FileGrid extends ControlPanel {
    constructor() {
            super()
            
            this.elements({
               //Constants for all Date only has these
                "Save": 'button[type="submit"][value="save"]',
                "Name" : 'input[type="text"][name = "field_label"]',
                "Instructions" : 'textarea[name = "field_instructions"]',
                "Required" : 'button[data-toggle-for = "field_required"]',
                "Search" : 'button[data-toggle-for = "field_search"]',
                "Hidden" : 'button[data-toggle-for = "field_is_hidden"]',

                //Field
                "Min" : 'input[name="grid_min_rows"]',
                "Max" : 'input[name="grid_max_rows"]',
                "Reorder" : 'button[data-toggle-for="allow_reorder"]',

                "FileTypes" : 'div[class="field-inputs"]', //then do .find('label').contains(All or image)

                //Directories
                "All" : 'input[name="allowed_directories"][value="all"]',
                "OtherDirectories" : 'div[class= "checkbox-label__text"]',//.contains('nameofDir')

                //Grid Settup
                "AddRow" : 'a[rel="add_new"]'
            })
        }
}
export default FileGrid;