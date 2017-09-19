<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_27a3f392007cb87deb163129ba6cca9b35a91e681c4ba2b2fd87bf5359d2e89e extends Twig_Template
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
        $__internal_e635cadac045687ca6c5df00d44f77a8ad308ae5fb8f51ae97ae0c50a20639b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e635cadac045687ca6c5df00d44f77a8ad308ae5fb8f51ae97ae0c50a20639b5->enter($__internal_e635cadac045687ca6c5df00d44f77a8ad308ae5fb8f51ae97ae0c50a20639b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e984e122eedc1007f1bf35a43edfcc409e38c698022512f92cbe9fd0e0e56d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e984e122eedc1007f1bf35a43edfcc409e38c698022512f92cbe9fd0e0e56d3d->enter($__internal_e984e122eedc1007f1bf35a43edfcc409e38c698022512f92cbe9fd0e0e56d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e635cadac045687ca6c5df00d44f77a8ad308ae5fb8f51ae97ae0c50a20639b5->leave($__internal_e635cadac045687ca6c5df00d44f77a8ad308ae5fb8f51ae97ae0c50a20639b5_prof);

        
        $__internal_e984e122eedc1007f1bf35a43edfcc409e38c698022512f92cbe9fd0e0e56d3d->leave($__internal_e984e122eedc1007f1bf35a43edfcc409e38c698022512f92cbe9fd0e0e56d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
