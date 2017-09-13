<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_24828bd1125ef69f12debff2bae7e8939b81b1fcafe0c42b4f612c42ac34bc26 extends Twig_Template
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
        $__internal_11aa71a89aaff7790eeb22f004aae3710f954505892472982d2beecc9fdb4319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11aa71a89aaff7790eeb22f004aae3710f954505892472982d2beecc9fdb4319->enter($__internal_11aa71a89aaff7790eeb22f004aae3710f954505892472982d2beecc9fdb4319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_891840127c74ab55174e4fa4a02712c307035627a2a809cdc8dbcf2e10f9a2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891840127c74ab55174e4fa4a02712c307035627a2a809cdc8dbcf2e10f9a2d9->enter($__internal_891840127c74ab55174e4fa4a02712c307035627a2a809cdc8dbcf2e10f9a2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_11aa71a89aaff7790eeb22f004aae3710f954505892472982d2beecc9fdb4319->leave($__internal_11aa71a89aaff7790eeb22f004aae3710f954505892472982d2beecc9fdb4319_prof);

        
        $__internal_891840127c74ab55174e4fa4a02712c307035627a2a809cdc8dbcf2e10f9a2d9->leave($__internal_891840127c74ab55174e4fa4a02712c307035627a2a809cdc8dbcf2e10f9a2d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
