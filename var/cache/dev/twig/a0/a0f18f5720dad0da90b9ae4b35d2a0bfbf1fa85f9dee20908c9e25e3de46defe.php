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
        $__internal_40d0e5b4cc04ad15a94eef44331259f4b604bf2a5470dd259c1f16e927eb3ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d0e5b4cc04ad15a94eef44331259f4b604bf2a5470dd259c1f16e927eb3ec3->enter($__internal_40d0e5b4cc04ad15a94eef44331259f4b604bf2a5470dd259c1f16e927eb3ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2d281d671d7091298d0ec22f87515b5b436e09b2142fd066a82aac7c9bf058a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d281d671d7091298d0ec22f87515b5b436e09b2142fd066a82aac7c9bf058a7->enter($__internal_2d281d671d7091298d0ec22f87515b5b436e09b2142fd066a82aac7c9bf058a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_40d0e5b4cc04ad15a94eef44331259f4b604bf2a5470dd259c1f16e927eb3ec3->leave($__internal_40d0e5b4cc04ad15a94eef44331259f4b604bf2a5470dd259c1f16e927eb3ec3_prof);

        
        $__internal_2d281d671d7091298d0ec22f87515b5b436e09b2142fd066a82aac7c9bf058a7->leave($__internal_2d281d671d7091298d0ec22f87515b5b436e09b2142fd066a82aac7c9bf058a7_prof);

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
