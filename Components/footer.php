<!DOCTYPE html>
<html lang="en">

<script src="https://cdn.tailwindcss.com"></script>

<footer class="bg-gray-900 text-white py-12 mt-60 px-6">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
        
        <!-- About Section -->
        <div>
            <h4 class="text-lg font-semibold mb-4">About Us</h4>
            <p class="text-gray-400 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis urna euismod, convallis lectus ut, malesuada nisl.</p>
        </div>
        
        <!-- Links Section -->
        <div class="hidden sm:block">
            <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
            <ul class="text-gray-400 space-y-2">
                <li><a href="#" class="hover:text-white">Home</a></li>
                <li><a href="#" class="hover:text-white">About Us</a></li>
                <li><a href="#" class="hover:text-white">Services</a></li>
                <li><a href="#" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <!-- Another Links Section -->
        <div class="hidden sm:block">
            <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
            <ul class="text-gray-400 space-y-2">
                <li><a href="#" class="hover:text-white">Home</a></li>
                <li><a href="#" class="hover:text-white">About Us</a></li>
                <li><a href="#" class="hover:text-white">Services</a></li>
                <li><a href="#" class="hover:text-white">Contact</a></li>
            </ul>
        </div>
        
        <!-- Social Media Section -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>
    </div>

    <div class="mt-12 border-t border-gray-700 pt-6 text-center text-sm text-gray-400">
        <p>&copy; <?php echo date("Y"); ?> Your Company Name. All rights reserved.</p>
    </div>
</footer>

</html>
