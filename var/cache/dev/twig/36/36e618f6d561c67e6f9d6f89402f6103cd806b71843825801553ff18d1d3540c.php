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
        $__internal_ce94735044d8b5f36b24b46110aa37645515dac21194721014ed56d6aa07a186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce94735044d8b5f36b24b46110aa37645515dac21194721014ed56d6aa07a186->enter($__internal_ce94735044d8b5f36b24b46110aa37645515dac21194721014ed56d6aa07a186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_8fe0497f2d5bce076dbf4379669f219f8aa38fc059d0665fa6e9a44afd75f424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe0497f2d5bce076dbf4379669f219f8aa38fc059d0665fa6e9a44afd75f424->enter($__internal_8fe0497f2d5bce076dbf4379669f219f8aa38fc059d0665fa6e9a44afd75f424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ce94735044d8b5f36b24b46110aa37645515dac21194721014ed56d6aa07a186->leave($__internal_ce94735044d8b5f36b24b46110aa37645515dac21194721014ed56d6aa07a186_prof);

        
        $__internal_8fe0497f2d5bce076dbf4379669f219f8aa38fc059d0665fa6e9a44afd75f424->leave($__internal_8fe0497f2d5bce076dbf4379669f219f8aa38fc059d0665fa6e9a44afd75f424_prof);

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
