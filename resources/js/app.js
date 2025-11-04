import './bootstrap'
import Alpine from 'alpinejs'

window.Alpine = Alpine
document.addEventListener('alpine:init', () => {
  Alpine.data('dropdownMenu', () => ({
    openIndex: null,
    menus: [
      { 
        id: 'baja', 
        label: 'Tower Baja', 
        items: [
          { label: 'SST 3 Leg', href: '/sst3leg' },
          { label: 'SST 4 Leg', href: '/sst4leg' },
          { label: 'MONOPOLE', href: '/monopole' },
          { label: 'POLE', href: '/pole' }
        ]
      },
      { 
        id: 'nonbaja', 
        label: 'Tower Non-Baja', 
        items: [
          { label: 'Mini Tower GFRP', href: '/gfrp' },
          { label: 'SOP Implementasi', href: '/sop-implementasi' }
        ]
      },
      { 
        id: 'perkuatan', 
        label: 'Perkuatan', 
        items: [
          { label: 'Standarisasi Perkuatan Baja', href: '/standarisasi-baja' },
          { label: 'Perkuatan GFRP', href: '/perkuatan-gfrp' }
        ]
      },
      { 
        id: 'checklist', 
        label: 'CheckList-ATP', 
        items: [
          { label: 'B2S', href: '/b2s' },
          { label: 'COLLO', href: '/collo' }
        ]
      }
    ],

    toggle(index) {
      this.openIndex = this.openIndex === index ? null : index
    }
  }))
})



Alpine.start()
