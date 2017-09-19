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
        $__internal_a27fddaf89771463a2d69480083dd73fc25b0dc18c8818b89eb10c8e78ce5722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27fddaf89771463a2d69480083dd73fc25b0dc18c8818b89eb10c8e78ce5722->enter($__internal_a27fddaf89771463a2d69480083dd73fc25b0dc18c8818b89eb10c8e78ce5722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5bba9eb03860717c3e3f40567921176420e84db15833fe37c39ba8318c9e01ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bba9eb03860717c3e3f40567921176420e84db15833fe37c39ba8318c9e01ad->enter($__internal_5bba9eb03860717c3e3f40567921176420e84db15833fe37c39ba8318c9e01ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a27fddaf89771463a2d69480083dd73fc25b0dc18c8818b89eb10c8e78ce5722->leave($__internal_a27fddaf89771463a2d69480083dd73fc25b0dc18c8818b89eb10c8e78ce5722_prof);

        
        $__internal_5bba9eb03860717c3e3f40567921176420e84db15833fe37c39ba8318c9e01ad->leave($__internal_5bba9eb03860717c3e3f40567921176420e84db15833fe37c39ba8318c9e01ad_prof);

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
