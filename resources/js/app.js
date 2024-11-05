import './bootstrap';
import 'preline';

document.addEventListener('livewire:navigated', () => {
    window.HSStaticMethods.autoInit(); // Essa linha irá fazer o préloading para todos os itens javascript
})
