<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_458d21bc00723d898918721ce1cc1220dbc8e16363130bb73be0532ff98570f5 extends Twig_Template
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
        $__internal_61813c3ff07781ca37586d719f56a591d51f771e807f5ff31561dd67924211c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61813c3ff07781ca37586d719f56a591d51f771e807f5ff31561dd67924211c4->enter($__internal_61813c3ff07781ca37586d719f56a591d51f771e807f5ff31561dd67924211c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_2aacc95cf493a39bacfe3d5cf3ffeeafd02f91beee8781805dc5057bffca7018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aacc95cf493a39bacfe3d5cf3ffeeafd02f91beee8781805dc5057bffca7018->enter($__internal_2aacc95cf493a39bacfe3d5cf3ffeeafd02f91beee8781805dc5057bffca7018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_61813c3ff07781ca37586d719f56a591d51f771e807f5ff31561dd67924211c4->leave($__internal_61813c3ff07781ca37586d719f56a591d51f771e807f5ff31561dd67924211c4_prof);

        
        $__internal_2aacc95cf493a39bacfe3d5cf3ffeeafd02f91beee8781805dc5057bffca7018->leave($__internal_2aacc95cf493a39bacfe3d5cf3ffeeafd02f91beee8781805dc5057bffca7018_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
