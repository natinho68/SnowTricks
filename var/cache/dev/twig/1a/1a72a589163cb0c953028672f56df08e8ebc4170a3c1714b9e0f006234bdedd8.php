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
        $__internal_ba4c102deb443bffa11657b3cc68af9e84e33ce6de7bda643b785862ea095468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4c102deb443bffa11657b3cc68af9e84e33ce6de7bda643b785862ea095468->enter($__internal_ba4c102deb443bffa11657b3cc68af9e84e33ce6de7bda643b785862ea095468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e7c2b92267e51676354cfc4c87f1b967d96e5dbf69d2982cd1e7035d7396f2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c2b92267e51676354cfc4c87f1b967d96e5dbf69d2982cd1e7035d7396f2d6->enter($__internal_e7c2b92267e51676354cfc4c87f1b967d96e5dbf69d2982cd1e7035d7396f2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ba4c102deb443bffa11657b3cc68af9e84e33ce6de7bda643b785862ea095468->leave($__internal_ba4c102deb443bffa11657b3cc68af9e84e33ce6de7bda643b785862ea095468_prof);

        
        $__internal_e7c2b92267e51676354cfc4c87f1b967d96e5dbf69d2982cd1e7035d7396f2d6->leave($__internal_e7c2b92267e51676354cfc4c87f1b967d96e5dbf69d2982cd1e7035d7396f2d6_prof);

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
