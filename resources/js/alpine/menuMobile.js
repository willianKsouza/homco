export default () => ({
    open: null,
    menuOpen:false,
    
    toggle() {
        this.menuOpen = ! this.menuOpen
    }
})