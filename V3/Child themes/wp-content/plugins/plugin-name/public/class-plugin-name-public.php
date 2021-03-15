<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/public
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/plugin-name-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-public.js', array( 'jquery' ), $this->version, false );

	}

	//our frist hello world shortcode
	public function public_hello_world()
	{
		//get the general settings options
		$userdays = get_option( 'thedays');
		$useremail = get_option( 'theemail');

		//different message based on day
		if ($userdays == '1') {
			return ($useremail . ' is 1 and done son.');
		}
		elseif ($userdays == '2') {
			return ($useremail . ' is 2 2 2 2 2');
		}
		elseif ($userdays == '3') {
			return ($useremail . '3 is the users email ' . $useremail);
		}
		elseif ($userdays == '4') {
			return ($useremail . ' 444');
		}
		elseif ($userdays == '5') {
			return ($useremail . ' five5five');
		}
		else
		{
			return('You selected no days');
		}
	}
	//output video shortcode function
	public function wp10viddisplay()
	{
		$thepostcount = get_option( 'ypostcount' ); // gathered post count from settings

		$allMPVidPosts = get_posts( array('post_type' => 'wp10yvids', 'numberposts' => $thepostcount, 'order' => 'ASC') );
		//loop show the posts 
		?>
		<div class="grid-container">
		<?php
		foreach ($allMPVidPosts as $eachpost)
		{
			?>
			<div class="grid-item">
			<p><?php echo ( $eachpost->ytitle); ?></p>
			 <a href="http://localhost/Child%20themes/index.php/watch/?vid=<?php echo ($eachpost->videoID->videoId  . "&oid=" . $eachpost->ID);?>"><img src="<?php echo ( $eachpost->imageresmed); ?>"></a>
			</div>
			<?php
		}
		?>
		</div>
		<?php
	}
	//display requested video in large box
	public function wp10ydisplaybox()
	{
		//set vid variable
		$thevid= '';
		$thepostid = '';

		//check for video set
		if (isset($_GET ['vid'])) {
			$thevid = $_GET['vid'];
			$thepostid = $_GET['oid'];
		}

		//check if the vid  equal to something
		if ($thevid == '') {
			?>
				<h1>No video to Display</h1>
			<?php
		}
		else
		{
			//display  the video in box
			$thetitle = get_post_meta( $thepostid , 'ytitle', true)
			
			?>
				<script src="https://apis.google.com/js/platform.js"></script>
				<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
				<div class="g-ytsubscribe" data-channelid="UCEGOB2zUkWLDE2Kpgs_ziNw" data-layout="full" data-count="default"></div>
				
				<script>
					setTimeout(function() { $('#thetopvid').fadeIn(); $('#adunit').fadeOut();} , 5000);
				</script>

				<div id="adunit">
					<div class="grid-container" style="grid-template-columns: 1fr 1fr">
					<div class="grid-item">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/OcK4C65WFv4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="grid-item">
						<p>SE Natholdet nu</p>
					</div>
					</div>
				</div>

				<div id="thetopvid" style="display:none;">
				<h4><?php echo($thetitle); ?></h4>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo($thevid);?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<?php
			$allMPVidPosts = get_posts( array('post_type' => 'wp10yvids', 'numberposts' => 4, 'order' => 'ASC') );
			//loop show the posts 
			$i = 0; //keeps track of how many videos have been output
			?>
			<div class="grid-container">
			<?php
			foreach ($allMPVidPosts as $eachpost)
			{
				if ($eachpost->ID == $thepostid) {
					//do nothing becaues this video is already showing
				} else{
					if ($i >= 3){
						# code...
					}
					else {
						?>
						<div class="grid-item">
						<p><?php echo ( $eachpost->ytitle); ?></p>
						<a href="http://localhost/Child%20themes/index.php/watch/?vid=<?php echo ($eachpost->videoID->videoId  . "&oid=" . $eachpost->ID);?>"><img src="<?php echo ( $eachpost->imageresmed); ?>"></a>
						</div>
						<?php
						$i++;
					}
				
				}
			}
			?>
			</div>
			<?php
		}

	}

}
