<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b72dc14e22d90f4cd371c2a43c0ca0c517c2bcd954b1223a27bbb4702dcd701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32164e87f859df36d492953e646d6b062f830a2d985f2579ce6608a811255e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32164e87f859df36d492953e646d6b062f830a2d985f2579ce6608a811255e81->enter($__internal_32164e87f859df36d492953e646d6b062f830a2d985f2579ce6608a811255e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6350c096eb913eca83231daccbae2d4d483964410bc5a9abb488fceeab569b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6350c096eb913eca83231daccbae2d4d483964410bc5a9abb488fceeab569b58->enter($__internal_6350c096eb913eca83231daccbae2d4d483964410bc5a9abb488fceeab569b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_32164e87f859df36d492953e646d6b062f830a2d985f2579ce6608a811255e81->leave($__internal_32164e87f859df36d492953e646d6b062f830a2d985f2579ce6608a811255e81_prof);

        
        $__internal_6350c096eb913eca83231daccbae2d4d483964410bc5a9abb488fceeab569b58->leave($__internal_6350c096eb913eca83231daccbae2d4d483964410bc5a9abb488fceeab569b58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
