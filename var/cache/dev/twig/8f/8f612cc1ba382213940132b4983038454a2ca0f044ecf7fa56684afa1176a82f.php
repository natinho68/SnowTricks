<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_60e0e966e0140078b587b8d51af5fb64f61ad224bc8c67eee154d7af1004ad25 extends Twig_Template
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
        $__internal_63c11e309ab8de63dc952d63120385090e0beda9b58d2e969e396021d6da7dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c11e309ab8de63dc952d63120385090e0beda9b58d2e969e396021d6da7dc5->enter($__internal_63c11e309ab8de63dc952d63120385090e0beda9b58d2e969e396021d6da7dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_126a0dea83dc55cd0aa76043fa2849377be295590bbc881fba39e05f3b0bf623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126a0dea83dc55cd0aa76043fa2849377be295590bbc881fba39e05f3b0bf623->enter($__internal_126a0dea83dc55cd0aa76043fa2849377be295590bbc881fba39e05f3b0bf623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_63c11e309ab8de63dc952d63120385090e0beda9b58d2e969e396021d6da7dc5->leave($__internal_63c11e309ab8de63dc952d63120385090e0beda9b58d2e969e396021d6da7dc5_prof);

        
        $__internal_126a0dea83dc55cd0aa76043fa2849377be295590bbc881fba39e05f3b0bf623->leave($__internal_126a0dea83dc55cd0aa76043fa2849377be295590bbc881fba39e05f3b0bf623_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
